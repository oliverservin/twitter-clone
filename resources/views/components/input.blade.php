@props(['label', 'disabled' => false])

<div class="w-full space-y-2">
    @isset($label)
        <p class="text-xl font-semibold text-white">{{ $label }}</p>
    @endisset

    <input
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'w-full p-4 text-lg bg-black border-2 border-neutral-800 rounded-md outline-none text-white focus:border-sky-500 focus:border-2 transition disabled:bg-neutral-900 disabled:opacity-70 disabled:cursor-not-allowed']) }}
    />

    @error($attributes->whereStartsWith('wire:model'))
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
