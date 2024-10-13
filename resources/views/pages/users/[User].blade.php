<?php

use function Laravel\Folio\name;

name('users.show');

?>

<x-layouts.app>
    <x-header with-back-button>{{ $user->name }}</x-header>
    <x-user-hero :user="$user" />
    <livewire:user-bio :user="$user" />
    <livewire:post-list :user="$user" />
</x-layouts.app>
