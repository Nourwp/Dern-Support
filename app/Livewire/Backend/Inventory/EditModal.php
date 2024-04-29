<?php

namespace App\Livewire\Backend\inventory;

use App\Models\inventory;
use LivewireUI\Modal\ModalComponent;

class EditModal extends ModalComponent
{
    public int $id;
    public string $name = '';
    public function render()
    {
        $this->authorize('create', inventory::class);
        return view('livewire.backend.inventory.edit-modal');
    }

    public function mount($id)
    {
        $inventory = \App\Models\inventory::find($id);
        $this->id = $inventory->id;
        $this->name = $inventory->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            
        ]);
        $inventory = \App\Models\inventory::find($this->id);
        $inventory->name = $this->name;
        $inventory->save();
        toastr()->success('inventory updated successfully');
        $this->dispatch('pg:eventRefresh-default');
        $this->closeModal();
    }
}
