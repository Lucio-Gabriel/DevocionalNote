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
        ->assertSuccessful();
});
