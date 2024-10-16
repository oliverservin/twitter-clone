<?php

use function Laravel\Folio\name;

name('notifications');

?>

<x-layouts.app>
    <x-header with-back-button>Notificaciones</x-header>
    <livewire:notification-list />
</x-layouts.app>
