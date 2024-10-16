<?php

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('notifications');

middleware('auth');

?>

<x-layouts.app>
    <x-header with-back-button>Notificaciones</x-header>
    <livewire:notification-list />
</x-layouts.app>
