<?php

namespace App\Livewire\Pages\Notes;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.notes.index')
            ->layout('layouts.app');
    }
}
