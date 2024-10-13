<?php

use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state('body');

rules(['body' => 'required|min:3']);

$save = function () {
    $this->validate();

    Auth::user()->posts()->create([
        'body' => $this->body,
    ]);

    $this->dispatch('post-created');

    $this->body = '';
};

?>

<div class="border-b-[1px] border-neutral-800 px-5 py-2">
    <div class="flex flex-row gap-4">
        <div>
            <x-avatar :user="auth()->user()" />
        </div>
        <div class="w-full">
            <form wire:submit="save">
                <textarea
                    wire:model="body"
                    class="peer mt-3 w-full resize-none border-0 bg-black p-0 text-[20px] text-white placeholder-neutral-500 outline-none ring-0 focus:ring-0 disabled:opacity-80"
                    placeholder="¿Que estas pensando?"
                ></textarea>
                <hr class="h-[1px] w-full border-neutral-800 opacity-0 transition peer-focus:opacity-100" />
                <div class="mt-4 flex flex-row justify-end">
                    <x-button>Publicar</x-button>
                </div>
            </form>
        </div>
    </div>
</div>
