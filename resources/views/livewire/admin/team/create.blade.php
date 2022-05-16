<div>
    <button wire:click="$toggle('addModal')" class="text-xs font-semibold text-slate-600 hover:bg-pink-600 hover:border-pink-600 hover:text-white transition-all tracking-wider border rounded-md uppercase px-4 py-2 -my-2">Add member</button>

    <x-jet-dialog-modal wire:model="addModal">
        <x-slot name="title">Add team member</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="Full name" />
                <x-jet-input type="text" id="name" wire:model="name" class="mt-1 w-full"/>
                <x-jet-input-error for="name" />
            </div>
            <div class="mt-6">
                <x-jet-label for="email" value="Email" />
                <x-jet-input type="email" id="email" wire:model="email" class="mt-1 w-full"/>
                <x-jet-input-error for="email" />
            </div>
            <div class="mt-6">
                <x-jet-label for="position" value="Position" />
                <x-jet-input type="text" id="position" wire:model="position" class="mt-1 w-full"/>
                <x-jet-input-error for="position" />
            </div>
            <div class="mt-6">
                <x-jet-label for="is_board" value="Board member? (optional)" />
                <div class="flex items-center mt-1">
                    <x-jet-input type="checkbox" id="is_board" wire:model="is_board" class="mr-2"/>
                    <span class="text-sm">Select if this person is a board member</span>
                </div>
            </div>
            <div class="mt-6">
                <x-jet-label for="avatar" value="Avatar" />
                <x-jet-input type="file" accept="image/png, image/jpeg" id="avatar" wire:model="avatar" class="mt-1 w-full"/>
                <x-jet-input-error for="avatar" />
            </div>
            <div class="mt-6">
                <x-jet-label for="bio" value="Biography" />
                <textarea id="bio" cols="30" rows="10" wire:model="bio" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <x-jet-input-error for="bio" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('addModal')">Dismiss</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">Save</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
