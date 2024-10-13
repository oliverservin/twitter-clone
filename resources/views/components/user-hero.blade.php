@props(['user'])

<div>
    <div class="relative h-44 bg-neutral-700">
        @if ($user->cover_photo_url)
            <img src="{{ $user->cover_photo_url }}" class="h-full w-full object-cover" />
        @endif
        <div class="absolute -bottom-16 left-4">
            <x-avatar :user="$user" has-border large />
        </div>
    </div>
</div>
