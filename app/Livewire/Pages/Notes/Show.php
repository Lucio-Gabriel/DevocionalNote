<?php

namespace App\Livewire\Pages\Notes;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.notes.show')
            ->layout('layouts.app');
    }
}
