<div>
    <button wire:click="$toggle('deleteModal')" class="flex items-center text-red-400 hover:text-red-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
        </svg>
    </button>

    <x-jet-confirmation-modal wire:model="deleteModal">
        <x-slot name="title">Are you sure you want to delete {{$member->name}}?</x-slot>
        <x-slot name="content">This action cannot be undone.</x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('deleteModal')">Dismiss</x-jet-secondary-button>
            <x-jet-danger-button wire:click="delete" class="ml-4">Delete member</x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
