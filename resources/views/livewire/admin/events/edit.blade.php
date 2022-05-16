<div>
    <button wire:click="$toggle('modal')" class="flex items-center text-slate-400 hover:text-slate-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
    </button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">Add event</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="title" value="Event name"/>
                <x-jet-input type="text" id="title" name="title" wire:model="title" class="mt-1 w-full"/>
            </div>

            <div class="mt-6">
                <x-jet-label for="type" value="Event type"/>
                <select name="type" id="type" wire:model="type" class="mt-1 w-full">
                    <option></option>
                    <option value="event">Event</option>
                    <option value="practice">Practice</option>
                </select>
            </div>

            <div class="mt-6">
                <label for="all_day">
                    <x-jet-input id="all_day" type="checkbox" wire:model="all_day" />
                    <span>All day event</span>
                </label>
            </div>

            @if ($all_day === false)
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="">
                        <x-jet-label for="start" value="Start date"/>
                        <x-jet-input type="datetime-local" id="start" name="start" wire:model="start" class="mt-1 w-full"/>
                    </div>
                    <div class="">
                        <x-jet-label for="end" value="End date"/>
                        <x-jet-input type="datetime-local" id="end" name="end" wire:model="end" class="mt-1 w-full"/>
                    </div>
                </div>
            @else
                <div class="mt-6">
                    <x-jet-label for="start" value="Start date"/>
                    <x-jet-input type="datetime-local" id="start" name="start" wire:model="start" class="mt-1 w-full"/>
                </div>
            @endif

            <div class="mt-6">
                <x-jet-label for="description" value="Event details"/>
                <textarea name="description" id="description" wire:model="description" cols="30" rows="4"></textarea>
            </div>

            <div class="mt-6">
                <x-jet-label for="location" value="Location"/>
                <x-jet-input type="text" id="location" name="location" wire:model="location" class="mt-1 w-full"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Dismiss</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">Save</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
