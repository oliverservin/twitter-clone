@props(['disabled' => false, 'fullWidth' => false, 'secondary' => false, 'large' => false, 'outline' => false])

<button
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->except('class') }}
    @class([
        'rounded-full disabled:cursor-not-allowed disabled:opacity-70',
        'border-2 font-semibold transition hover:opacity-80',
        'w-full' => $fullWidth,
        'w-fit' => ! $fullWidth,
        'border-black bg-white text-black' => $secondary,
        'border-sky-500 bg-sky-500 text-white' => ! $secondary,
        'px-5 py-4 text-xl' => $large,
        'px-4 py-2 text-base' => ! $large,
        'border-white bg-transparent text-white' => $outline,
    ])
>
    {{ $slot }}
</button>
