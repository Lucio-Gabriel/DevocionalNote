<?php

use App\Livewire\Notes\Index;
use App\Models\Note;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('should display the list of notes', function () {
    $user = User::factory()->create();

    actingAs($user);

    $notes = Note::factory()->create([
       'title' => 'First note',
       'content' => 'First content',
    ]);

    Livewire::test(Index::class)
        ->assertSee('First note')
        ->assertSee('First content');
});

it('should be able to delete a note', function () {
    $user = User::factory()->create();

    actingAs($user);

    $note = Note::factory()->create();

    Livewire::test(Index::class)
        ->call('deleteNote', $note->id)
        ->assertSuccessful();
});
