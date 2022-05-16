<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage the team') }}
            </h2>
            @livewire('admin.team.create')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul wire:sortable="reorder" class="w-full">
                @forelse ($members as $member)
                    <li wire:sortable.item="{{ $member->id }}" wire:key="member-{{ $member->id }}" class="mb-4 w-full flex items-center justify-between bg-white px-4 py-3 rounded-lg border shadow-sm">
                        <div class="flex items-center gap-2">
                            <button wire:sortable.handle class="mr-2 hover:text-pink-600 py-2 pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <img src="{{asset($member->avatar)}}" alt="" class="w-10 h-10 rounded-md">
                            <div class="">
                                <div class="text-sm font-semibold text-slate-800">{{$member->name}}</div>
                                <div class="text-sm text-pink-600">{{$member->position}}</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            @livewire('admin.team.edit', ['member' => $member], key("edit-".$member->id))
                            @livewire('admin.team.delete', ['member' => $member], key("delete-".$member->id))
                        </div>
                    </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
