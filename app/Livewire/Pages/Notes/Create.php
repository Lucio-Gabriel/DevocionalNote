<?php

namespace App\Livewire\Pages\Notes;

use App\Models\Note;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $user;

    #[Validate('required|min:3|max:255')]
    public string $title = '';

    #[Validate('required|min:3|max:255')]
    public string $content = '';

    public function mount()
    {
        $this->user = auth()->user();

        if (!$this->user) {
            redirect()->route('login');
        }
    }

    protected function messages()
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'content.required' => 'O conteúdo é obrigatório.',
            'title.min' => 'O título precisa ter pelo menos 3 caracteres.',
            'content.min' => 'O conteúdo precisa ter pelo menos 3 caracteres.',
            'title.max' => 'O título pode ter no máximo 255 caracteres.',
            'content.max' => 'O conteúdo pode ter no máximo 255 caracteres.'
        ];
    }

    public function save()
    {
        $this->validate();

        Note::create(
          $this->only(['title', 'content'])
        );

        //session()->flash('status', 'Nota criada com sucesso.');

        $this->redirect(route('dashboard.notes'));
    }

    public function render()
    {
        return view('livewire.pages.notes.create')
            ->layout('layouts.app');
    }
}
