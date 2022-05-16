<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage events') }}
            </h2>
            @livewire('admin.events.create')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="w-full">
                @forelse ($events as $event)
                <li class="mb-4 w-full flex items-center justify-between bg-white px-4 py-3 rounded-lg border shadow-sm">
                    <div class="flex items-center gap-2">
                        <div class="">
                            <div class="text-sm font-light">{{Carbon\Carbon::parse($event->start)->format('M d, Y')}}</div>
                            <div class="text-sm font-normal uppercase">{{Carbon\Carbon::parse($event->start)->format('H:i a')}}</div>
                        </div>
                        <div class="ml-4">
                            <div class="font-semibold">{{$event->title}}</div>
                            <div class="text-sm mt-1 text-slate-600 font-medium">{{$event->description}}</div>
                            <div class="mt-2 flex items-center gap-2 text-xs text-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <a href="">{{$event->location}}</a >
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        @livewire('admin.events.edit', ['event' => $event], key('edit-'.$event->id))
                        @livewire('admin.events.delete', ['event' => $event], key('delete-'.$event->id))
                    </div>
                </li>
                @empty

                @endforelse
            </ul>

            <div class="">
                {{$events->links()}}
            </div>
        </div>
    </div>
</div>
