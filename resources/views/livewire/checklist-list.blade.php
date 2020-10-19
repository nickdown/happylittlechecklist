<div>
    @if($checklists->count())
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($checklists as $checklist)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            <a href="{{ route('checklist.show', $checklist->id) }}"
                                               class="hover:text-indigo-700 hover:underline-indigo-700"
                                            >{{$checklist->name}}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <button wire:click="confirmDeleteChecklist({{$checklist->id}})" class="text-red-600 hover:text-red-900">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-jet-confirmation-modal wire:model="confirmingChecklistDeletion">
                <x-slot name="title">
                    Delete Checklist
                </x-slot>

                <x-slot name="content">
                    Are you sure you want to delete this checklist?
                </x-slot>

                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="abortDeleteChecklist" wire:loading.attr="disabled">
                        Nevermind
                    </x-jet-secondary-button>

                    <x-jet-danger-button class="ml-2" wire:click="deleteChecklist" wire:loading.attr="disabled">
                        Delete Checklist
                    </x-jet-danger-button>
                </x-slot>
            </x-jet-confirmation-modal>
        </div>
    @endif
</div>
