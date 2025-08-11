@push('meta')
    <title>User Information Form | My App</title>
    <meta name="description" content="Fill out your personal details like name, date of birth, and contact info.">
@endpush
<div>
    <form wire:submit.prevent="submit"
        class="w-full max-w-md 
           bg-transparent 
           border-none 
           rounded-xl 
           p-6 
           space-y-4 
           shadow-none">
        @csrf

        <!-- Heading -->
        <h2 class="text-lg font-bold text-gray-800 dark:text-white text-center">User Information</h2>

        <!-- Full Name -->
        <div>
            <label for="full_name" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                Full Name
            </label>
            <x-text-input id="full_name" wire:model.live="full_name" name="full_name" type="text"
                class="block w-full px-4 py-2" required />
            @error('full_name')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>


        <!-- Date of Birth -->
        <div>
            <label for="date_of_birth" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                Date of Birth
            </label>
            <x-text-input id="date_of_birth" wire:model.live="date_of_birth" name="date_of_birth" type="date"
                class="block w-full px-4 py-2" required />
            @error('date_of_birth')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>


        <!-- Mobile Number -->
        <div>
            <label for="mobile_number" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                Mobile Number
            </label>
            <x-text-input id="mobile_number" name="mobile_number" type="tel" wire:model.live="mobile_number"
                pattern="^09\d{9}$" inputmode="numeric" class="block w-full px-4 py-2" required />
            @error('mobile_number')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>


        <!-- Email -->
        <div>
            <label for="email" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">
                Email Address
            </label>
            <x-text-input id="email" wire:model.live="email" name="email" type="email"
                class="block w-full px-4 py-2" required />
            @error('email')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>


        <!-- Submit Button -->
        <button type="submit"
            class="w-full mt-4 py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow-md transition duration-200">
            Submit
        </button>
    </form>
</div>
