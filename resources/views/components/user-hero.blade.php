@props(['user'])

<div>
    <div class="relative h-44 bg-neutral-700">
        <div class="absolute -bottom-16 left-4">
            <x-avatar :user="$user" has-border large />
        </div>
    </div>
</div>
