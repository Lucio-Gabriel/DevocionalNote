<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>

    <div class="flex flex-col md:items-center mb-7">
        <h1 class="text-xl md:text-2xl font-semibold text-primary">
            Crie sua conta
        </h1>

        <p class="text-sm text-gray-accent font-normal">
            Faça seu registro para acessar suas notas
        </p>
    </div>

    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-text-input wire:model="name"
                          id="name"
                          class="block mt-1 w-full"
                          type="text"
                          name="name"
                          placeholder="Nome"
                          required
                          autofocus autocomplete="name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input wire:model="email"
                          id="email"
                          class="block mt-1 w-full"
                          type="email"
                          name="email"
                          placeholder="Email"
                          required
                          autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input wire:model="password"
                          id="password"
                          class="block mt-1 w-full"
                          type="password"
                          name="password"
                          placeholder="Senha"
                          required
                          autocomplete="new-password"
            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input wire:model="password_confirmation"
                          id="password_confirmation"
                          class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation"
                          placeholder="Confirma senha"
                          required
                          autocomplete="new-password"
            />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-center items-center mt-8">
            <x-primary-button class="ms-4">
                Registrar
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-96 md:mt-4">
            <p class="text-sm font-normal text-gray-accent">
                Já possui conta?

                <a
                    href="{{ route('login') }}"
                    class="text-primary font-semibold hover:text-primary-accent duration-300"
                >
                    Faça login
                </a>
            </p>
        </div>
    </form>
</div>
