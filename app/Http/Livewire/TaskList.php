<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    public function toggleTask($taskId)
    {
        $task = Task::query()->find($taskId); // or fail?
        // confirm belongs to current team?

        $newCompletedValue = $task->completed ? false : true;
        $task->completed= $newCompletedValue;
        $task->save();

        $this->loadTasks();
    }

    public function render()
    {
        $this->loadTasks();

        return view('livewire.task-list');
    }

    protected function loadTasks()
    {
        $this->tasks = auth()->user()->currentTeam->tasks()->get();
    }
}
