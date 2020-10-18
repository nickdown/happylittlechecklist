<div>
    <form wire:submit.prevent="submit" class="sm:flex mt-8" aria-labelledby="newsletter-headline">
        <input wire:model="name" aria-label="Task name" type="text" required class="appearance-none shadow-xl w-full px-5 py-4 border border-gray-300 text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out sm:max-w-xs" placeholder="Task name:">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <div class="mt-3 rounded-md shadow-xl sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button type="submit" class="w-full flex items-center justify-center px-5 py-4 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                Create
            </button>
        </div>
    </form>
</div>
