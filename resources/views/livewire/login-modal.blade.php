<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

use function Livewire\Volt\{rules, state};

state(['email' => '', 'password' => '']);

rules(['email' => 'required|email', 'password' => 'required']);

$login = function () {
    $this->validate();

    $this->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('home', absolute: false), navigate: true);
};

$authenticate = function () {
    if (! Auth::attempt($this->only(['email', 'password']), true)) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }
};
?>

<div x-data="{ showLoginModal: false }" x-cloak x-on:show-login-modal.window="showLoginModal = true">
    <div x-cloak x-transition.opacity x-show="showLoginModal" class="fixed inset-0 z-50 bg-neutral-800/70"></div>
    <div x-cloak x-transition x-show="showLoginModal" class="fixed inset-0 z-50 flex items-center">
        <div @click.away="showLoginModal = false" class="mx-auto w-full max-w-lg rounded-lg bg-black p-10">
            <div class="flex items-center justify-between">
                <h3 class="text-3xl font-semibold text-white">Iniciar sesión</h3>
                <button @click="showLoginModal = false" type="button" class="p-1 hover:opacity-70">
                    <x-icon.close class="size-5" />
                </button>
            </div>

            <form wire:submit="login" class="mt-20 flex flex-col gap-4">
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
                    <x-button secondary full-width large>Iniciar sesión</x-button>
                </div>

                <p class="text-center text-neutral-400">
                    ¿Aún no tienes una cuenta?
                    <button
                        type="button"
                        class="text-white hover:underline"
                        @click="showLoginModal = false; $dispatch('show-register-modal')"
                    >
                        Regístrate
                    </button>
                </p>
            </form>
        </div>
    </div>
</div>
