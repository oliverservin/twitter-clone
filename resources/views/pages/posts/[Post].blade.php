<?php

use function Laravel\Folio\name;

name('posts.show');

?>

<x-layouts.app>
    <x-header with-back-button>Post</x-header>
    <livewire:show-post :post="$post" />
    @auth
        <livewire:comment-form :post="$post" />
    @else
        <x-auth-button />
    @endauth
    <livewire:comment-list :post="$post" />
</x-layouts.app>
