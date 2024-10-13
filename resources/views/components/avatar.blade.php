@props(['user', 'hasBorder' => false, 'large' => false])

<a
    href="{{ route('users.show', ['user' => $user]) }}" wire:navigate
    @class([
        'relative z-10 block rounded-full transition hover:opacity-90',
        'border-4 border-black' => $hasBorder,
        'size-32' => $large,
        'size-12' => ! $large,
    ])
>
    <img class="rounded-full object-cover" alt="Avatar" src="{{ $user->profile_photo_url }}" />
</a>
