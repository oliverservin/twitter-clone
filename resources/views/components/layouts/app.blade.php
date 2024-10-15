<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs-notify@latest/dist/notifications.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full bg-black font-sans text-white antialiased">
        <div class="h-screen bg-black">
            <div class="xl:px-30 container mx-auto h-full max-w-6xl">
                <div class="grid h-full grid-cols-4">
                    <livewire:sidebar />
                    <div class="col-span-3 border-x-[1px] border-neutral-800 lg:col-span-2">{{ $slot }}</div>
                    <div>
                        <!-- Seguir cuentas -->
                        <livewire:follow-bar />
                    </div>
                </div>
            </div>
        </div>
        <livewire:register-modal />
        <livewire:login-modal />

        <x-toast />
    </body>
</html>
