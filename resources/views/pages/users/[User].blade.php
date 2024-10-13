<?php

use function Laravel\Folio\name;

name('users.show');

?>

<x-layouts.app>
    <x-header with-back-button>{{ $user->name }}</x-header>
    <x-user-hero :user="$user" />
    <div class="pt-12">
        <x-user-bio :user="$user" />
    </div>
    <livewire:post-list :user="$user" />
</x-layouts.app>
