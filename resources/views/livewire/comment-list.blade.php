<?php

use function Livewire\Volt\{on, state};

$getComments = function () {
    return $this->comments = $this->post->comments;
};

state(['post', 'comments' => $getComments]);

on(['comment-created' => $getComments]);

?>

<div>
    @foreach($comments as $comment)
    <div class="border-b-[1px] border-neutral-800 p-5">
        <div class="flex flex-row items-start gap-3">
            <x-avatar :user="$comment->user" />
            <div>
                <div class="flex flex-row items-center gap-2">
                    <span
                        class="relative z-10 font-semibold text-white hover:underline"
                    >
                        {{ $comment->user->name }}
                    </span>
                    <span
                        class="relative z-10 hidden text-neutral-500 hover:underline md:block"
                    >
                        {{ $comment->user->username }}
                    </span>
                    <span class="text-sm text-neutral-500">
                        {{ $comment->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="mt-1 text-white">
                    {{ $comment->body }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
