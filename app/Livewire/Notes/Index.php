<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

    #[Computed]
    public function notes(): Collection
    {
        return Note::get();
    }

    public function deleteNote(int $noteId)
    {
        Note::findOrFail($noteId)->delete();
    }

    public function render()
    {
        return view('livewire.notes.index')
            ->layout('layouts.app');
    }
}
