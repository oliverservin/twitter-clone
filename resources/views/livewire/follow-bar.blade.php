<?php

use App\Models\User;

use function Livewire\Volt\state;

$getUsers = function () {
    return $this->users = User::all();
};

state(['users' => $getUsers]);

?>

<div class="hidden px-6 py-4 lg:block">
    <div class="rounded-xl bg-neutral-800 p-4">
        <h2 class="text-xl font-semibold text-white">A quién seguir</h2>
        <div class="mt-4 flex flex-col gap-6">
            @foreach ($users as $user)
                <div class="flex flex-row gap-4">
                    <x-avatar :user="$user" />
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold text-white">
                            {{ $user->name }}
                        </p>
                        <p class="text-sm text-neutral-400">
                            {{ '@'.$user->username }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
