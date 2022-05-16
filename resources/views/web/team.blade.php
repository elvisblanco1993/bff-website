<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Meet the Team</div>

        <div class="my-6 grid grid-cols-3 gap-8">
            @forelse (\App\Models\Team::where('board', 1)->get() as $board_member)
                <div class="col-span-3 md:col-span-1">
                    <img src="{{asset($board_member->avatar)}}" alt="" class="w-full lg:h-full object-cover rounded-xl">
                </div>
                <div class="col-span-3 md:col-span-2">
                    <div class="text-lg md:text-xl font-bold text-slate-800">{{$board_member->name}}</div>
                    <div class="text-lg md:text-lg font-medium text-pink-600">{{$board_member->position}}</div>
                    <div class="mt-4 text-sm leading-6 text-justify">{{$board_member->bio}}</div>
                </div>
                <div class="col-span-3"></div>
            @empty

            @endforelse
        </div>
    </div>
    @include('partials.footer')
</x-guest-layout>
