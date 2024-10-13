<div class="border-b-[1px] border-neutral-800 px-5 py-2">
    <div class="py-8" x-data>
        <h1 class="mb-4 text-center text-2xl font-bold text-white">Bienvenido a Flitter</h1>
        <div class="flex flex-row items-center justify-center gap-4">
            <x-button type="button" @click="$dispatch('show-login-modal')">Iniciar sesión</x-button>
            <x-button type="button" @click="$dispatch('show-register-modal')" secondary>Registrarse</x-button>
        </div>
    </div>
</div>
