<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage sponsors') }}
            </h2>
            @livewire('admin.sponsors.create')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="w-full mt-6 rounded-lg">
                @forelse ($sponsors as $sponsor)
                    <li @class([
                        'flex items-center justify-between bg-white border-b p-4',
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ])>
                        <div class="">{{$sponsor->name}}</div>
                        <div class="flex items-center gap-4">
                            @livewire('admin.sponsors.delete', ['sponsor' => $sponsor], key('delete-'.$sponsor->id))
                        </div>
                    </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
