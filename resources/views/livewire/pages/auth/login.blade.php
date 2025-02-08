<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="mt-10">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col md:items-center mb-7">
        <h1 class="text-xl md:text-2xl font-semibold text-primary">
            Bem vindo de volta
        </h1>

        <p class="text-sm text-gray-accent font-normal">
            Faça seu login para acessar suas notas
        </p>
    </div>

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-text-input wire:model="form.email"
                          id="email"
                          class="block mt-1 w-full"
                          type="email"
                          name="email"
                          placeholder="Email"
                          required autofocus
                          autocomplete="username"
            />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Senha"
                            required autocomplete="current-password"
            />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <div class="flex justify-end items-end mt-3.5">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-accent hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    Esqueceu sua senha?
                </a>
            @endif
        </div>

        <div class="flex justify-center items-center mt-4">
            <x-primary-button class="ms-3">
                Acessar
            </x-primary-button>
        </div>
    </form>

    <div class="flex items-center justify-center mt-96 md:mt-4">
        <p class="text-sm font-normal text-gray-accent">
            Ainda não possui conta?

            <a
                href="{{ route('register') }}"
                class="text-primary font-semibold hover:text-primary-accent duration-300"
            >
                Registre-se
            </a>
        </p>
    </div>

</div>
