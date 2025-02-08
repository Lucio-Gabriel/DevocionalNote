<?php

namespace App\Livewire\Pages\Options;

use Livewire\Component;

class OptionsMenu extends Component
{
    public function render()
    {
        return view('livewire.pages.options.options-menu')
            ->layout('layouts.app');
    }
}
