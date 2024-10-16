<?php

use App\Models\Post;
use App\Notifications\PostLiked;

use function Livewire\Volt\on;
use function Livewire\Volt\state;

$getPosts = function () {
    if ($this->user) {
        return $this->posts = $this->user->posts;
    }

    return $this->posts = Post::all();
};

state(['user' => null, 'posts' => $getPosts]);

on(['post-created' => $getPosts]);

$toggleLike = function (Post $post) {
    auth()->user()->likedPosts()->toggle($post);

    if ($post->likedBy->contains(auth()->user())) {
        $post->user->notify(new PostLiked);
    }

    $this->getPosts();

    $this->dispatch('toast', message: 'Éxito');
}

?>

<div>
    @foreach($posts as $post)
    <div class="relative border-b-[1px] border-neutral-800 p-5 transition hover:bg-neutral-900">
        <div class="flex flex-row items-start gap-3">
            <x-avatar :user="$post->user" />
            <div>
                <div class="flex flex-row items-center gap-2">
                    <a href="{{ route('users.show', ['user' => $post->user]) }}" wire:navigate class="relative z-10 font-semibold text-white hover:underline">
                        {{ $post->user->name }}
                    </a>
                    <a href="{{ route('users.show', ['user' => $post->user]) }}" wire:navigate class="relative z-10 hidden text-neutral-500 hover:underline md:block">
                        {{ $post->user->username }}
                    </a>
                    <span class="text-sm text-neutral-500">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="mt-1 text-white">
                    {{ $post->body }}
                </div>
                <div class="mt-3 flex flex-row items-center gap-10">
                    <button
                        @auth
                            wire:click="toggleLike({{ $post->id }})"
                        @else
                            @click="$dispatch('show-login-modal')"
                        @endauth
                        class="relative z-10 flex flex-row items-center gap-2 text-neutral-500 transition hover:text-red-500"
                    >
                        @if ($post->likedBy->contains(auth()->user()))
                            <x-icon.heart-solid class="size-5 text-red-500" />
                        @else
                            <x-icon.heart-outline class="size-5" />
                        @endif
                        <p>
                            {{ $post->likedBy()->count() }}
                        </p>
                    </button>
                    <a
                        href="{{ route('posts.show', ['post' => $post]) }}" wire:navigate
                        class="relative z-10 flex flex-row items-center gap-2 text-neutral-500 transition hover:text-sky-500"
                    >
                        <x-icon.comment class="size-5"></x-icon.comment>
                        <p>{{ $post->comments()->count() }}</p>
                    </a>
                </div>
            </div>
        </div>
        <a href="{{ route('posts.show', ['post' => $post]) }}" wire:navigate class="absolute inset-0"></a>
    </div>
    @endforeach
</div>
