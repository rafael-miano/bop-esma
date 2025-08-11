<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('BOP ATTENDANCE') }}
        </h2>
    </x-slot>

        <div class="p-4 sm:p-6 lg:p-8">
            <div class="bg-white dark:bg-transparent shadow-md rounded-lg overflow-hidden">
                @livewire('attendees.table-list')
            </div>
        </div>
    </div>
</x-app-layout>
