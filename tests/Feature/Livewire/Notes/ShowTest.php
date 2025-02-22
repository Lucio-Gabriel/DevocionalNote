<?php

use App\Models\Note;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('should display the note', function () {
    $user = User::factory()->create();

    actingAs($user);

    $note = Note::factory()->create();

    Livewire::test('notes.show', ['note' => $note])
        ->assertSee($note->title)
        ->assertSee($note->content);
});
