<?php

use function Laravel\Folio\name;

name('posts.show');

?>

<x-layouts.app>
    <x-header with-back-button>Post</x-header>
    <div class="relative border-b-[1px] border-neutral-800 p-5 transition hover:bg-neutral-900">
        <div class="flex flex-row items-start gap-3">
            <x-avatar :user="$post->user" />
            <div>
                <div class="flex flex-row items-center gap-2">
                    <span class="relative z-10 font-semibold text-white hover:underline">
                        {{ $post->user->name }}
                    </span>
                    <span class="relative z-10 hidden text-neutral-500 hover:underline md:block">
                        {{ '@'.$post->user->username }}
                    </span>
                    <span class="text-sm text-neutral-500">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="mt-1 text-white">
                    {{ $post->body }}
                </div>
            </div>
        </div>
    </div>
    @auth
        <livewire:comment-form :post="$post" />
    @else
        <x-auth-button />
    @endauth
    <livewire:comment-list :post="$post" />
</x-layouts.app>
