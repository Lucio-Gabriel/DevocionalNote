<?php

use App\Livewire\Pages\Notes\Create;
use App\Models\Note;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('should be able permission to create notes', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
        ->assertSuccessful();
});

it('should be able to create notes', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
        ->set('title', 'Test Note')
        ->set('content', 'Test Content')
        ->call('save')
        ->assertRedirect(route('dashboard.notes'))
        ->assertSuccessful();
});

it('should be able validate camp title and content', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
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
