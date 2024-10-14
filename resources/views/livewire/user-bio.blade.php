<?php

use App\Models\User;
use Livewire\WithFileUploads;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;
use function Livewire\Volt\uses;

$getIsFollowing = function () {
    return $this->isFollowing = auth()->user()?->following->contains($this->user);
};

uses(WithFileUploads::class);

state([
    'user',
    'name' => auth()->user()?->name,
    'username' => auth()->user()?->username,
    'bio' => auth()->user()?->bio,
    'isFollowing' => $getIsFollowing,
    'cover',
    'photo',
]);

rules(fn () => [
    'name' => ['required'],
    'username' => ['required', 'unique:users,username,'.auth()->user()?->id],
    'bio' => ['nullable'],
    'cover' => ['nullable', 'image', 'max:2048'],
    'photo' => ['nullable', 'image', 'max:2048'],
]);

$updateUser = function () {
    $this->validate();

    if ($this->photo) {
        auth()->user()->updateProfilePhoto($this->photo);
    }

    if ($this->cover) {
        auth()->user()->updateCoverPhoto($this->cover);
    }

    auth()->user()->update([
        'name' => $this->name,
        'username' => $this->username,
        'bio' => $this->bio,
    ]);

    session()->flash('toast', 'Actualizado');

    $this->redirect(route('users.show', ['user' => auth()->user()]), navigate: true);
};

$toggleFollow = function (User $user) {
    auth()->user()->following()->toggle($user);

    $this->getIsFollowing();

    $this->dispatch('toast', message: 'Éxito');
};

?>

<div x-data="{ showEditModal: false }" @keydown.window.escape="showEditModal = false" class="border-b-[1px] border-neutral-800 pb-4">
    <div class="flex justify-end p-2">
        @if (auth()->check() && auth()->user()->id === $user->id)
            <x-button @click="showEditModal = !showEditModal" secondary>Editar</x-button>
        @elseif(auth()->check())
            <x-button wire:click="toggleFollow({{ $user->id }})" :secondary="!$isFollowing" :outline="$isFollowing">
                @if ($isFollowing)
                    Dejar de seguir
                @else
                    Seguir
                @endif
            </x-button>
        @else
            <x-button @click="$dispatch('show-login-modal')" secondary>Seguir</x-button>
        @endif
    </div>
    <div class="mt-8 px-4">
        <div class="flex flex-col">
            <p class="text-2xl font-semibold text-white">
                {{ $user->name }}
            </p>
            <p class="text-base text-neutral-500">
                {{ '@'.$user->username }}
            </p>
        </div>
        <div class="mt-4 flex flex-row items-center gap-6">
            <div class="flex flex-row items-center gap-1">
                <p class="text-white">{{ $user->following()->count() }}</p>
                <p class="text-neutral-500">Siguiendo</p>
            </div>
            <div class="flex flex-row items-center gap-1">
                <p class="text-white">{{ $user->followers()->count() }}</p>
                <p class="text-neutral-500">Seguidores</p>
            </div>
        </div>
        <div class="mt-4 flex flex-col">
            <p class="text-white">{{ $user->bio }}</p>
            <div class="mt-4 flex flex-row items-center gap-2 text-neutral-500">
                <x-icon.calendar class="size-6" />
                <p>
                    <!-- Se unió en [fecha con iso format MMMM de YYYY] -->
                    {{ $user->created_at->isoFormat('MMMM \d\e\ YYYY') }}
                </p>
            </div>
        </div>
    </div>
    <div>
        <div x-cloak x-transition.opacity x-show="showEditModal" class="fixed inset-0 z-50 bg-neutral-800/70"></div>
        <div x-cloak x-transition x-show="showEditModal" class="fixed inset-0 z-50 flex items-center">
            <div @click.away="showEditModal = false" class="mx-auto w-full max-w-lg rounded-lg bg-black p-10">
                <form wire:submit="updateUser">
                    <div class="flex items-center justify-between">
                        <h3 class="text-3xl font-semibold text-white">Edita tu perfil</h3>
                        <button type="button" class="p-1 hover:opacity-70">
                            <x-icon.close class="size-5" />
                        </button>
                    </div>
                    <div class="mt-20 flex flex-col gap-4">
                        <div x-data="{ coverPreview: null }">
                            <input
                                wire:model="cover"
                                type="file"
                                id="cover"
                                x-ref="cover"
                                x-on:change="
                                    const reader = new FileReader()
                                    reader.onload = (e) => {
                                        coverPreview = e.target.result
                                    }
                                    reader.readAsDataURL($refs.cover.files[0])
                                "
                                class="hidden"
                            />

                            <div class="space-y-2">
                                <div class="relative h-44 overflow-hidden rounded-lg bg-neutral-700">
                                    @if ($user->cover_photo_url)
                                        <img
                                            x-show="!coverPreview"
                                            src="{{ $user->cover_photo_url }}"
                                            class="h-full w-full bg-center bg-no-repeat object-cover"
                                        />
                                    @endif
                                    <span
                                        x-show="coverPreview"
                                        class="block h-full w-full bg-cover bg-center bg-no-repeat"
                                        x-bind:style="'background-image: url(' + coverPreview + ')'"
                                    ></span>
                                </div>
                                <div class="text-right">
                                    <x-button secondary type="button" @click="$refs.cover.click()">
                                        Seleccionar foto nueva
                                    </x-button>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ photoPreview: null }">
                            <input
                                wire:model="photo"
                                type="file"
                                id="photo"
                                class="hidden"
                                x-ref="photo"
                                x-on:change="
                                    const reader = new FileReader()
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result
                                    }
                                    reader.readAsDataURL($refs.photo.files[0])
                                "
                            />

                            <div class="flex items-center justify-between gap-2">
                                <div>
                                    <img
                                        x-show="!photoPreview"
                                        src="{{ $user->profile_photo_url }}"
                                        class="h-20 w-20 rounded-full object-cover"
                                    />
                                    <span
                                        x-show="photoPreview"
                                        class="block h-20 w-20 rounded-full bg-neutral-700 bg-cover bg-center bg-no-repeat"
                                        x-bind:style="'background-image: url(' + photoPreview + ')'"
                                    ></span>
                                </div>
                                <x-button secondary type="button" @click="$refs.photo.click()">
                                    Seleccionar foto nueva
                                </x-button>
                            </div>
                        </div>
                        <x-input wire:model="name" placeholder="Nombre" />
                        <x-input wire:model="username" placeholder="Nombre de usuario" />
                        <x-input wire:model="bio" placeholder="Biografía" />
                    </div>
                    <div class="mt-20">
                        <x-button full-width large>Guardar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
