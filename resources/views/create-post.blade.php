<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Share your most recent thought!') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white flex flex-col gap-4">
        <div class="flex flex-col gap-2">
            <label for="content" class="text-white font-bold">Content:</label>
            <textarea name="content" class="w-full p-2 text-white bg-gray-800 resize-none"></textarea>
        </div>
        <button class="bg-gray-600 w-full rounded-md p-3">Create</button>
    </div>
</x-app-layout>
