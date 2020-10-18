<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskForm extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        auth()->user()->currentTeam->tasks()->create([
            'name' => $this->name
        ]);

        $this->name = "";
    }
    public function render()
    {
        return view('livewire.task-form');
    }
}
