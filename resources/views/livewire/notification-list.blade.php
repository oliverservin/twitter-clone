<?php

use function Livewire\Volt\mount;
use function Livewire\Volt\state;

state(['notifications' => auth()->user()->notifications]);

mount(function () {
    auth()->user()->unreadNotifications->markAsRead();
});

?>

<div>
    <div class="flex flex-col">
        <!-- ítem de notificación -->
        @foreach ($notifications as $notification)
            <div class="flex flex-row items-center gap-4 border-b-[1px] border-neutral-800 p-6">
                <x-logo class="size-8" />
                <p class="text-white">{{ $notification->data[0] }}</p>
            </div>
        @endforeach
    </div>
</div>
