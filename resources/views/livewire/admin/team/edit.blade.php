<div>
    <button wire:click="$toggle('editModal')" class="flex items-center text-slate-400 hover:text-slate-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
    </button>

    <x-jet-dialog-modal wire:model="editModal">
        <x-slot name="title">Edit team member</x-slot>
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
            <x-jet-secondary-button wire:click="$toggle('editModal')">Dismiss</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">Save</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
