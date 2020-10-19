<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use Illuminate\Http\Request;
use Livewire\Component;

class TaskForm extends Component
{
    public $checklist;
    public $name;

    protected $rules = [
        'name' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        $this->checklist->tasks()->create([
            'name' => $this->name
        ]);

        $this->name = "";
        $this->emit('taskAdded');
    }

    public function mount(Request $request)
    {
        $this->checklist = Checklist::query()->find($request->checklist); // TODO: confirm user owns checklist
    }

    public function render()
    {
        return view('livewire.task-form');
    }
}
