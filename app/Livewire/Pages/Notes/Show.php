<?php

namespace App\Livewire\Pages\Notes;

use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
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
        return view('livewire.pages.notes.show')
            ->layout('layouts.app');
    }
}
