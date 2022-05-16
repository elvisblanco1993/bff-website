<div>
    <button wire:click="$toggle('addModal')" class="text-xs font-semibold text-slate-600 hover:bg-pink-600 hover:border-pink-600 hover:text-white transition-all tracking-wider border rounded-md uppercase px-4 py-2 -my-2">Add event</button>

    <x-jet-dialog-modal wire:model="addModal">
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
                <label for="repeat">
                    <x-jet-input id="repeat" type="checkbox" wire:model="repeat" />
                    <span>Repeat</span>
                </label>
            </div>

            @if ($repeat === true)
                <div class="mt-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <x-jet-label for="frequency" value="Every"/>
                            <select name="type" id="frequency" wire:model="frequency">
                                <option></option>
                                <option value="weekly">Week</option>
                                <option value="biweekly">2 weeks</option>
                                <option value="monhtly">Month</option>
                                <option value="yearly">Year</option>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <x-jet-label for="stop_after" value="Stop after occurrence"/>
                            <x-jet-input id="stop_after" type="text" wire:model="stop_after" class="mt-1 w-full"/>
                        </div>
                    </div>
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
            <x-jet-secondary-button wire:click="$toggle('addModal')">Dismiss</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">Save</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
