
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

$logout = function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return $this->redirect(route('home'), navigate: true);
}

?>

<div x-data class="col-span-1 h-full pr-4 md:pr-6">
    <div class="flex flex-col items-end">
        <div class="space-y-2 lg:w-[230px]">
            <a
                href="{{ route('home') }}"
                wire:navigate
                class="flex h-14 w-14 items-center justify-center rounded-full p-4 hover:bg-blue-300 hover:bg-opacity-10"
            >
                <x-logo class="size-7" />
            </a>

            <a href="{{ route('home') }}" wire:navigate class="flex flex-row items-center">
                <div
                    class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                >
                    <!-- icono size-7 -->
                    <x-icon.home class="size-7" />
                </div>
                <div
                    class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                >
                    <x-icon.home class="size-6" />
                    <p class="hidden text-xl text-white lg:block">Inicio</p>
                </div>
            </a>

            @auth

            <a href="{{ route('notifications') }}" wire:navigate class="flex flex-row items-center">
                <div
                    class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                >
                    <!-- icono size-7 -->
                    <x-icon.bell class="size-7" />
                </div>
                <div
                    class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                >
                    <x-icon.bell class="size-6" />
                    <p class="hidden text-xl text-white lg:block">Notificaciones</p>
                </div>
            </a>

            @endauth

            @auth
                <a href="{{ route('users.show', ['user' => auth()->user() ]) }}" wire:navigate class="flex flex-row items-center">
                    <div
                        class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                    >
                        <!-- icono size-7 -->
                        <x-icon.user class="size-7" />
                    </div>
                    <div
                        class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                    >
                        <x-icon.user class="size-6" />
                        <p class="hidden text-xl text-white lg:block">Perfil</p>
                    </div>
                </a>
            @else
                <button @click="$dispatch('show-login-modal')" class="flex flex-row items-center">
                    <div
                        class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                    >
                        <!-- icono size-7 -->
                        <x-icon.user class="size-7" />
                    </div>
                    <div
                        class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                    >
                        <x-icon.user class="size-6" />
                        <p class="hidden text-xl text-white lg:block">Perfil</p>
                    </div>
                </button>

            @endauth

            @auth
                <button wire:click="logout" class="flex flex-row items-center">
                    <div
                        class="relative flex h-14 w-14 cursor-pointer items-center justify-center rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:hidden"
                    >
                        <!-- icono size-7 -->
                        <x-icon.logout class="size-7" />
                    </div>
                    <div
                        class="items-row relative hidden cursor-pointer items-center gap-4 rounded-full p-4 hover:bg-slate-300 hover:bg-opacity-10 lg:flex"
                    >
                        <x-icon.logout class="size-6" />
                        <p class="hidden text-xl text-white lg:block">Cerrar sesión</p>
                    </div>
                </button>
            @endauth

            @auth
            <a href="{{ route('home') }}" wire:navigate class="block w-full">
                <div
                    class="mt-6 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-sky-500 p-4 transition hover:bg-opacity-80 lg:hidden"
                >
                    <!-- Icono feather size-6 -->
                    <x-icon.feather class="size-6" />
                </div>
                <div class="mt-6 hidden cursor-pointer rounded-full bg-sky-500 px-4 py-2 hover:bg-opacity-90 lg:block">
                    <p class="hidden text-center text-[20px] font-semibold text-white lg:block">Publicar</p>
                </div>
            </a>
            @else
            <button @click="$dispatch('show-login-modal')" class="block w-full">
                <div
                    class="mt-6 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-sky-500 p-4 transition hover:bg-opacity-80 lg:hidden"
                >
                    <!-- Icono feather size-6 -->
                    <x-icon.feather class="size-6" />
                </div>
                <div class="mt-6 hidden cursor-pointer rounded-full bg-sky-500 px-4 py-2 hover:bg-opacity-90 lg:block">
                    <p class="hidden text-center text-[20px] font-semibold text-white lg:block">Publicar</p>
                </div>
            </button>
            @endauth
        </div>
    </div>
</div>
