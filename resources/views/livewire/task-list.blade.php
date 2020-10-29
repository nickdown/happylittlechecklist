<div>
    <div>
        <div class="grid grid-cols-1 sm:gap-4 sm:grid-cols-2 md:grid-cols-5">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg col-span-2">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="w-0 flex-1">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                    Completed Tasks:
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl leading-8 font-semibold text-gray-900">
                                        {{ $checklist->completedTasks }}
                                    </div>
                                    <div class="ml-2 flex items-baseline text-sm leading-5 font-semibold">
                                        /
                                        <span class="sr-only">
                                            Out of
                                        </span>
                                        &nbsp; {{ $checklist->totalTasks }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <button wire:click="confirmResetTaskCompletions" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-50 focus:outline-none focus:border-gray-300 focus:shadow-outline-indigo active:bg-gray-200 transition ease-in-out duration-150">
                            Reset
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg col-span-2 mt-8 sm:mt-0">
                <div class="px-4 py-5 sm:p-6 h-full">
                    <div class="flex items-center h-full w-full">
                        @livewire('task-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        @if($tasks->count())
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 w-8"></th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($tasks as $task)
                                    <tr>
                                        <td class="pl-6 py-4 w-0">
                                            <input
                                                wire:click="toggleTask({{$task->id}})"
                                                {{$task->completed ? 'checked' : ''}}
                                                type="checkbox"
                                                class="form-checkbox h-4 w-4 text-indigo-600">
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{$task->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <button wire:click="confirmDeleteTask({{$task->id}})" class="text-red-600 hover:text-red-900">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="p-2">
                                No tasks yet. Add your first!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <x-jet-confirmation-modal wire:model="confirmingTaskDeletion">
            <x-slot name="title">
                Delete Task
            </x-slot>

            <x-slot name="content">
                Are you sure you want to delete this task?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="abortDeleteTask" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteTask" wire:loading.attr="disabled">
                    Delete Task
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>

        <x-jet-confirmation-modal wire:model="confirmingResetTaskCompletions">
            <x-slot name="title">
                Reset Checklist
            </x-slot>

            <x-slot name="content">
                This will reset all tasks in this checklist to incomplete. Are you sure you want to do this?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="abortResetTaskCompletions" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="resetTaskCompletions" wire:loading.attr="disabled">
                    Reset Checklist
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </div>
</div>
