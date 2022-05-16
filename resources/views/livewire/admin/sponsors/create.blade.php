<div>
    <button wire:click="$toggle('modal')" class="text-xs font-semibold text-slate-600 hover:bg-pink-600 hover:border-pink-600 hover:text-white transition-all tracking-wider border rounded-md uppercase px-4 py-2 -my-2">Add Sponsor</button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="Name" />
                <x-jet-input type="text" id="name" wire:model="name" class="mt-1 w-full"/>
                <x-jet-input-error for="name" />
            </div>
            <div class="mt-6">
                <x-jet-label for="logo" value="Logo" />
                <input type="file" id="logo" wire:model="logo" class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-pink-50 file:text-pink-700
                hover:file:bg-pink-100 mt-1">
                <x-jet-input-error for="logo" />
            </div>
            <div class="mt-6">
                <x-jet-label for="url" value="Website" />
                <x-jet-input type="url" id="url" wire:model="url" class="mt-1 w-full" placeholder="https://example.com" pattern="https://.*"/>
                <x-jet-input-error for="url" />
            </div>
            <div class="mt-6">
                <x-jet-label for="tier" value="Select sponsorship tier" />
                <select name="tier" id="tier" wire:model="tier" class="mt-1 w-full">
                    <option></option>
                    <option value="Dragon’s Head Emerald Sponsorship">Dragon’s Head Emerald Sponsorship</option>
                    <option value="Dragon’s Tail Ruby Sponsorship">Dragon’s Tail Ruby Sponsorship</option>
                    <option value="Paddle Onyx Sponsorship">Paddle Onyx Sponsorship</option>
                    <option value="Drum Saphire Sponsorship">Drum Saphire Sponsorship</option>
                    <option value="Friends of BFF">Friends of BFF</option>
                </select>
                <x-jet-input-error for="tier" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Dismiss</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">Save</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
