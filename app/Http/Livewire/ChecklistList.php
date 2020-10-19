<?php

namespace App\Http\Livewire;

use App\Models\Checklist;
use Livewire\Component;

class ChecklistList extends Component
{
    public $checklists;
    public $confirmingChecklistDeletion = false;
    public $checklistToDelete;

    protected $listeners = ['checklistAdded' => 'loadChecklists'];

    public function confirmDeleteChecklist($id)
    {
        $this->checklistToDelete = Checklist::query()->find($id); // TODO: confirm belongs to currentTeam?
        $this->confirmingChecklistDeletion = true;
    }

    public function abortDeleteChecklist()
    {
        $this->checklistToDelete = null;
        $this->confirmChecklistDeletion = false;
    }

    public function deleteChecklist()
    {
        $this->checklistToDelete->delete();

        $this->confirmingChecklistDeletion = false;
        $this->loadChecklists();
    }

    public function loadChecklists()
    {
        $this->checklists = auth()->user()->currentTeam->checklists()->get();
    }

    public function render()
    {
        $this->loadChecklists();

        return view('livewire.checklist-list');
    }
}
