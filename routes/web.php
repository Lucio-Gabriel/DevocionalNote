<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google', 'googleLogin')->name('auth.google');
    Route::get('auth/google/callback', 'googleAuthentication')->name('auth.google-callback');
});

Route::middleware(['auth'])->group(function () {
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('dashboard/pomodoro', \App\Livewire\Pomodoro\Index::class)->name('pomodoro.index');

Route::get('dashboard/notes', App\Livewire\Notes\Index::class)->name('dashboard.notes');

Route::get('dashboard/notes/create', \App\Livewire\Notes\Create::class)->name('dashboard.notes.create');

Route::get('dashboard/notes/{note}/edit', \App\Livewire\Notes\Edit::class)->name('dashboard.notes.edit');

Route::get('dashboard/notes/{note}', \App\Livewire\Notes\Show::class)->name('notes.show');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
