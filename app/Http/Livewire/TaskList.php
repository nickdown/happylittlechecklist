<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use App\Models\Task;
use Illuminate\Http\Request;
use Livewire\Component;

class TaskList extends Component
{
    public $checklist;
    public $tasks;
    public $confirmingTaskDeletion = false;
    public $taskToDelete;

    protected $listeners = ['taskAdded' => 'loadTasks'];

    public function confirmDeleteTask($id)
    {
        $this->taskToDelete = Task::query()->find($id); // confirm belongs to currentTeam?
        $this->confirmingTaskDeletion = true;
    }

    public function abortDeleteTask()
    {
        $this->taskToDelete = null;
        $this->confirmingTaskDeletion = false;
    }

    public function deleteTask()
    {
        $this->taskToDelete->delete();

        $this->confirmingTaskDeletion = false;
        $this->loadTasks();
    }

    public function toggleTask($taskId)
    {
        $task = Task::query()->find($taskId); // or fail?
        // confirm belongs to current team?

        $newCompletedValue = $task->completed ? false : true;
        $task->completed= $newCompletedValue;
        $task->save();

        $this->loadTasks();
    }

    public function mount(Request $request)
    {
        // TODO: confirm checklist is owned by current team
        $this->checklist = Checklist::query()->find($request->checklist);
    }

    public function loadTasks()
    {
        $this->tasks = $this->checklist->tasks()->get();
    }

    public function render()
    {
        $this->loadTasks();

        return view('livewire.task-list');
    }
}
