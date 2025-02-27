<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/pomodoro', \App\Livewire\Pomodoro\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('pomodoro.index');

Route::get('dashboard/notes', App\Livewire\Notes\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes');

Route::get('dashboard/notes/create', \App\Livewire\Notes\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes.create');

Route::get('dashboard/notes/{note}/edit', \App\Livewire\Notes\Edit::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes.edit');

Route::get('dashboard/notes/{note}', \App\Livewire\Notes\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('notes.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
