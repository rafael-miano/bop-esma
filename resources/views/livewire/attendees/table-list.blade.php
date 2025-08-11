<div class="w-full max-w-3xl mx-auto px-2 py-8">
    <div class="relative shadow-sm sm:rounded-lg">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 py-4">
            <div class="w-full sm:max-w-xs">
                <x-text-input type="text" wire:model.live="search" class="w-full text-sm" placeholder="Search here" />
            </div>
            <div class="w-full sm:w-auto flex items-center gap-2">
                <select wire:model.live="filterDate"
                    class="rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="today">Today's Attendance</option>
                    <option value="past">Past Attendance</option>
                </select>
            </div>
        </div>

        <table class="w-full text-sm text-left text-gray-600 dark:text-gray-300">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="text-sm px-3 py-2">Full Name</th>
                    <th class="text-sm px-3 py-2">Date of Birth</th>
                    <th class="text-sm px-3 py-2">Mobile</th>
                    <th class="text-sm px-3 py-2">Email</th>
                    <th class="text-sm px-3 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendees as $attendee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-3 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $attendee->full_name }}
                        </td>
                        <td class="px-3 py-2">
                            {{ $attendee->date_of_birth->format('F j, Y') }}
                        </td>
                        <td class="px-3 py-2">
                            {{ $attendee->mobile_number }}
                        </td>
                        <td class="px-3 py-2">
                            {{ $attendee->email }}
                        </td>
                        <td class="px-3 py-2">
                            {{ $attendee->created_at->format('F j, Y') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="px-4 py-2">
            {{ $attendees->links(data: ['scrollTo' => false]) }}
        </div>
    </div>
</div>
