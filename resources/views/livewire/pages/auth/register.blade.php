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
        ], [
            'name.required' => 'Por favor, informe o seu nome.',
            'email.required' => 'Por favor, informe o seu email.',
            'email.email' => 'Por favor, insira um email válido.',
            'email.unique' => 'O email informado já está em uso.',
            'password.required' => 'Por favor, informe uma senha.',
            'password.confirmed' => 'A senha de confirmação não confere.',
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
        <x-text-input wire:model="name"
            id="name"
            class="block mt-1 w-full"
            type="text"
            name="name"
            placeholder="Nome"
        />

        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input wire:model="email"
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                placeholder="Email"
            />
        </div>

        <x-input-error :messages="$errors->get('email')" class="mt-2"/>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input wire:model="password"
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                placeholder="Senha"
            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input
                wire:model="password_confirmation"
                id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                placeholder="Confirma senha"
            />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-center items-center mt-8">
            <button class="flex items-center gap-2 bg-primary text-white font-medium px-48 md:px-40 py-3 rounded-md shadow-md hover:bg-primary-accent duration-300">
                Registrar
            </button>
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
