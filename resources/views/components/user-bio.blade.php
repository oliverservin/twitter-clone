@props(['user'])

<div class="border-b-[1px] border-neutral-800 pb-4">
    <div class="mt-8 px-4">
        <div class="flex flex-col">
            <p class="text-2xl font-semibold text-white">
                {{ $user->name }}
            </p>
            <p class="text-base text-neutral-500">
                {{ '@'.$user->username }}
            </p>
        </div>
        <div class="mt-4 flex flex-col">
            <div class="mt-4 flex flex-row items-center gap-2 text-neutral-500">
                <x-icon.calendar class="size-6" />
                <p>
                    <!-- Se unió en [fecha con iso format MMMM de YYYY] -->
                    {{ $user->created_at->isoFormat('MMMM \d\e\ YYYY') }}
                </p>
            </div>
        </div>
    </div>
</div>
