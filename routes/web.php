<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/notes', \App\Livewire\Pages\Notes\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes');

Route::get('dashboard/notes/create', \App\Livewire\Pages\Notes\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.notes.create');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
