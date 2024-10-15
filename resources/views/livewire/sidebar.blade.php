<div class="col-span-1 h-full pr-4 md:pr-6">
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

            <!-- Botón para publicar -->
        </div>
    </div>
</div>
