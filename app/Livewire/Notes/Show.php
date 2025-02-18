<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Show extends Component
{

    public Note $note;

    public function mount(Note $note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('livewire.notes.show')
            ->layout('layouts.app');
    }
}
