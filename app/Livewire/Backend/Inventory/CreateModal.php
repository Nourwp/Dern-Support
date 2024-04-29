<?php

namespace App\Livewire\Backend\inventory;

use App\Models\inventory;
use LivewireUI\Modal\ModalComponent;

class CreateModal extends ModalComponent
{
    public string $name = '';

    public function render()
    {
        $this->authorize('create', inventory::class);
        return view('livewire.backend.inventory.create-modal');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);
        $inventory = new inventory();
        $inventory->name = $this->name;
        $inventory->save();
        toastr()->success('inventory created successfully');
        $this->dispatch('pg:eventRefresh-default');
        $this->closeModal();
    }
}
