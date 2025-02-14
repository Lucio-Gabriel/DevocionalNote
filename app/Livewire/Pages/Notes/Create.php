<?php

namespace App\Livewire\Pages\Notes;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.pages.notes.create')
            ->layout('layouts.app');
    }
}
