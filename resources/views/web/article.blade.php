<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Media & Articles</div>

        <div class="w-full my-12">
            @if ($article->multimedia->count() > 1)
                <div id="carouseltarget" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-inner relative w-full overflow-hidden">
                        @forelse ($article->multimedia as $photo)
                            <div @class([
                                'carousel-item relative float-left w-full',
                                'active' => $loop->first
                            ])>
                                <img
                                    src="{{Storage::url($photo->url)}}"
                                    class="block w-full object-cover aspect-video"
                                    alt="..."
                                />
                            </div>
                        @empty

                        @endforelse
                    </div>
                    <button
                        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                        type="button"
                        data-bs-target="#carouseltarget"
                        data-bs-slide="prev"
                        >
                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                        type="button"
                        data-bs-target="#carouseltarget"
                        data-bs-slide="next"
                        >
                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            @else
                <img src="{{Storage::url($article->multimedia->first()->url)}}" alt="" class="w-full aspect-video">
            @endif

            <h3 class="text-3xl font-extrabold mt-10 text-center">{{$article->title}}</h3>
            <div class="max-w-3xl mx-auto mt-6">
                <p class="mt-4 text-md sm:text-base prose prose-pink">{!!Str::markdown($article->body)!!}</p>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{asset('js/index.min.js')}}"></script>
</x-guest-layout>
