<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public $user;

    public Note $note;

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

        $this->title = $this->note->title;
        $this->content = $this->note->content;
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

        $this->note->update([
           'title' => $this->title,
           'content' => $this->content,
        ]);

        $this->redirect(route('dashboard.notes'));
    }
    public function render(): View
    {
        return view('livewire.notes.edit')
            ->layout('layouts.app');
    }
}
