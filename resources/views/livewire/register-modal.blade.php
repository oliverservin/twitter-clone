<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Livewire\Volt\{rules, state};

state([
    'name' => '',
    'username' => '',
    'email' => '',
    'password' => '',
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.User::class],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string'],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    $user = User::create($validated);

    Auth::login($user);

    $this->redirect(route('home', absolute: false), navigate: true);
};

?>

<div x-data="{ showRegisterModal: false }" x-cloak x-on:show-register-modal.window="showRegisterModal = true">
    <div x-cloak x-transition.opacity x-show="showRegisterModal" class="fixed inset-0 z-50 bg-neutral-800/70"></div>
    <div x-cloak x-transition x-show="showRegisterModal" class="fixed inset-0 z-50 flex items-center">
        <div @click.away="showRegisterModal = false" class="mx-auto w-full max-w-lg rounded-lg bg-black p-10">
            <div class="flex items-center justify-between">
                <h3 class="text-3xl font-semibold text-white">Registrarse</h3>
                <button @click="showRegisterModal = false" type="button" class="p-1 hover:opacity-70">
                    <x-icon.close class="size-5" />
                </button>
            </div>

            <form wire:submit="register" class="mt-20 flex flex-col gap-4">
                <x-input wire:model="name" id="name" type="text" name="name" required placeholder="Nombre" />

                <x-input
                    id="username"
                    wire:model="username"
                    type="text"
                    name="username"
                    required
                    placeholder="Nombre de usuario"
                />

                <x-input id="email" wire:model="email" type="email" name="email" required placeholder="Email" />

                <x-input
                    id="password"
                    wire:model="password"
                    type="password"
                    name="password"
                    required
                    placeholder="Contraseña"
                />

                <div class="mt-20">
                    <x-button secondary full-width large>Registrarse</x-button>
                </div>

                <p class="text-center text-neutral-400">
                    ¿Ya tienes una cuenta?
                    <button
                        type="button"
                        class="text-white hover:underline"
                        @click="showRegisterModal = false; $dispatch('show-login-modal')"
                    >
                        Iniciar Sesión
                    </button>
                </p>
            </form>
        </div>
    </div>
</div>
