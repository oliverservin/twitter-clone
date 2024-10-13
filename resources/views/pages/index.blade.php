<?php

use function Laravel\Folio\name;

name('home');

?>

<x-layouts.app>
    @guest
        <div class="py-8" x-data>
            <h1 class="mb-4 text-center text-2xl font-bold text-white">Bienvenido a Flitter</h1>
            <div class="flex flex-row items-center justify-center gap-4">
                <x-button type="button" @click="$dispatch('show-login-modal')">Iniciar sesión</x-button>
                <x-button type="button" @click="$dispatch('show-register-modal')" secondary>Registrarse</x-button>
            </div>
        </div>
    @else
        <livewire:post-form />
        <livewire:post-list />
    @endguest
</x-layouts.app>
