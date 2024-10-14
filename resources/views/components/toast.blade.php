<div
    x-data="{
        message: '{{ session('toast') }}',
        toast(message) {
            $notify(message, {
                wrapperId: 'FlashMessageWrapper',
                templateId: 'FlashMessageTemplate',
                autoClose: 3000,
                autoRemove: 4000,
            })
        },
    }"
    x-init="if (message) toast(message)"
    x-on:toast.window="toast($event.detail.message)"
>
    <div id="FlashMessageWrapper" class="fixed right-4 top-4 z-50 w-64 space-y-2"></div>

    <template id="FlashMessageTemplate">
        <div role="alert" class="flex gap-1.5 rounded-lg bg-sky-500 px-4 py-3 text-white">
            <x-icon.check class="size-6" />
            {notificationText}
        </div>
    </template>
</div>
