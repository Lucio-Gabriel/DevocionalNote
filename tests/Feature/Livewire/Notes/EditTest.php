<?php

use App\Livewire\Notes\Edit;
use App\Models\Note;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('should be able permission to edit a note', function () {
    $userOne = User::factory()->create();

    actingAs($userOne);

    $note = Note::factory()->create();

    Livewire::test(Edit::class, ['note' => $note])
        ->assertSuccessful();
});

it('should be able to edit a note', function () {
    $user = User::factory()->create();

    actingAs($user);

    $note = Note::factory()->create([
        'title' => 'Test Note',
        'content' => 'Test Content'
    ]);

    Livewire::test(Edit::class, ['note' => $note])
        ->set('title', 'New Title')
        ->set('content', 'New Content')
        ->call('save')
        ->assertRedirect(route('dashboard.notes'));
});

it('should be able validate camp title and content', function () {
    $user = User::factory()->create();

    actingAs($user);

    $note = Note::factory()->create();

    Livewire::test(Edit::class, ['note' => $note])
        ->set('title', '')
        ->assertHasErrors(['title' => 'required'])
        ->call('save')
        ->set('content', '')
        ->assertHasErrors(['content' => 'required'])
        ->call('save')
        ->set('title', 'Te')
        ->assertHasErrors(['title' => 'min'])
        ->call('save')
        ->set('content', 'Te')
        ->assertHasErrors(['content' => 'min'])
        ->call('save')
        ->set('title', str_repeat('a', 256))
        ->assertHasErrors(['title' => 'max'])
        ->call('save')
        ->set('content', str_repeat('a', 256))
        ->assertHasErrors(['content' => 'max'])
        ->call('save');
});


