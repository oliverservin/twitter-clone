<?php

use App\Models\Post;

use function Livewire\Volt\on;
use function Livewire\Volt\state;

$getPosts = function () {
    return $this->posts = Post::all();
};

state(['posts' => $getPosts]);

on(['post-created' => $getPosts]);

?>

<div>
    @foreach($posts as $post)
    <div class="relative border-b-[1px] border-neutral-800 p-5 transition hover:bg-neutral-900">
        <div class="flex flex-row items-start gap-3">
            <x-avatar :user="auth()->user()" />
            <div>
                <div class="flex flex-row items-center gap-2">
                    <span class="relative z-10 font-semibold text-white hover:underline">
                        {{ $post->user->name }}
                    </span>
                    <span class="relative z-10 hidden text-neutral-500 hover:underline md:block">
                        {{ $post->user->username }}
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
    @endforeach
</div>
