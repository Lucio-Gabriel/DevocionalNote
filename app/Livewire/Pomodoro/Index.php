<?php

namespace App\Livewire\Pomodoro;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pomodoro.index')
            ->layout('layouts.app');
    }
}
