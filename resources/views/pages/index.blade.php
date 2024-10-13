<?php

use function Laravel\Folio\name;

name('home');

?>

<x-layouts.app>
    <x-header>Inicio</x-header>
    @guest
        <x-auth-button />
    @else
        <livewire:post-form />
    @endguest
    <livewire:post-list />
</x-layouts.app>
