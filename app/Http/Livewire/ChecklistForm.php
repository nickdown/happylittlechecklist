<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChecklistForm extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        auth()->user()->currentTeam->checklists()->create([
            'name' => $this->name
        ]);

        $this->name = "";
        $this->emit('checklistAdded');
    }

    public function render()
    {
        return view('livewire.checklist-form');
    }
}
