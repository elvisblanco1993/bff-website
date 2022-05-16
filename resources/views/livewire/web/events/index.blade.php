<div>
    <div class="grid grid-cols-3 gap-8">
        <div class="col-span-3 sm:col-span-1">
            <input type="search" wire:model="search" placeholder="Search event by name" required/>
        </div>
        <div class="col-span-3 sm:col-span-2">
            <ul class="">
                @forelse ($events as $event)
                    <li class="grid grid-cols-4 gap-4 bg-white shadow-sm border border-slate-200 rounded-lg p-4">
                        <div
                            @class([
                                'col-span-1 p-4 rounded-lg flex items-center',
                                'bg-pink-50 border border-pink-100' => $event->type == 'event',
                                'bg-sky-50 border border-sky-100' => $event->type == 'practice'
                            ])>
                            <div class="w-full text-center">
                                <div class="text-lg font-semibold text-slate-600">{{Carbon\Carbon::parse($event->start)->format('M d, Y')}}</div>
                                <div class="text-xl font-extrabold text-slate-700 uppercase">{{Carbon\Carbon::parse($event->start)->format('H:i a')}}</div>
                            </div>
                        </div>
                        <div class="col-span-3 p-4 flex flex-col justify-center">
                            <div class="font-bold">{{$event->title}}</div>
                            <div class="text-sm mt-1 text-slate-600 font-medium">{{$event->description}}</div>
                            <div class="mt-2 flex items-center gap-2 text-xs text-sky-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <a href="http://maps.google.com/maps?q={{$event->location}}">{{$event->location}}</a >
                            </div>
                        </div>
                    </li>
                    <li class="my-4"></li>
                @empty

                @endforelse
            </ul>
            <div class="mt-6">
                {{$events->links()}}
            </div>
        </div>
    </div>
</div>
