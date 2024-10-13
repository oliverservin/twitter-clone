@props(['withBackButton' => false])

<div class="border-b-[1px] border-neutral-800 p-5">
    <div class="flex flex-row items-center gap-2">
        @if ($withBackButton)
            <a
                href="{{ url()->previous() === url()->current() ? route('home') : url()->previous() }}"
                wire:navigate
                class="transition hover:opacity-70"
            >
                <x-icon.arrow-left class="size-5" />
            </a>
        @endif

        <h1 class="text-xl font-semibold text-white">{{ $slot }}</h1>
    </div>
</div>
