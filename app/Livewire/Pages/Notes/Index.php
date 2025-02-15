<?php

namespace App\Livewire\Pages\Notes;

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

    public function render()
    {
        return view('livewire.pages.notes.index')
            ->layout('layouts.app');
    }
}
