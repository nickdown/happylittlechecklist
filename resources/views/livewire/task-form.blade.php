<div class="bg-white shadow-xl sm:rounded-lg mt-8">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Add a Task
        </h3>
        <form wire:submit.prevent="submit" class="mt-5 sm:flex sm:items-center">
            <div class="max-w-xs w-full">
                <label for="name" class="sr-only">Task name</label>
                <div class="relative rounded-md shadow-sm">
                    <input wire:model="name" id="name" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Meditate five minutes">
                </div>
            </div>
            <span class="mt-3 inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
                    Add
                </button>
            </span>
        </form>
    </div>
</div>
