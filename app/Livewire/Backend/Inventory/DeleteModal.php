<?php

namespace App\Livewire\Backend\inventory;

use App\Models\inventory;
use LivewireUI\Modal\ModalComponent;

class DeleteModal extends ModalComponent
{
    public int $id;

    public function render()
    {
        $this->authorize('create', inventory::class);
        return view('livewire.backend.inventory.delete-modal');
    }

    public function delete()
    {
        $inventory = inventory::find($this->id);
        $inventory->delete();
        toastr()->success('inventory deleted successfully');
        $this->dispatch('pg:eventRefresh-default');
        $this->closeModal();
    }
}
