<form wire:submit.prevent="submit" class="flex items-center w-full">
    <div class="max-w-xs w-full flex-1">
        <label for="name" class="sr-only">Task name</label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="name" id="name" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Add a task...">
        </div>
    </div>
    <span class="inline-flex rounded-md shadow-sm ml-3 sm:w-auto">
        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
            Add
        </button>
    </span>
</form>
