<div id="carouseltarget" class="carousel slide relative sm:px-6 lg:px-8" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
            type="button"
            data-bs-target="#carouseltarget"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-bs-target="#carouseltarget"
            data-bs-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-bs-target="#carouseltarget"
            data-bs-slide-to="2"
            aria-label="Slide 3"
        ></button>
    </div> --}}
    <div class="carousel-inner relative w-full overflow-hidden">
        @forelse (\App\Models\Multimedia::latest()->take(5)->get() as $photo)
            <div @class([
                'carousel-item relative float-left w-full',
                'active' => $loop->first
            ])>
                <img
                    src="{{ Storage::url($photo->url) }}"
                    class="block w-full object-cover aspect-video"
                    alt="..."
                />
            </div>
        @empty

        @endforelse
    </div>

    {{-- Navigation buttons --}}
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
<script src="{{asset('js/index.min.js')}}"></script>
