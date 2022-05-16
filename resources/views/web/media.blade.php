<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Media & Articles</div>

        <div class="grid grid-cols-2 gap-12 mt-12">
            @forelse ($articles as $article)
                <a href="{{route('article.view', ['article' => $article])}}" class="col-span-2 sm:col-span-1 group">
                    <div class="">
                        <img src="{{Storage::url($article->multimedia->first()->url)}}" alt="" class="block h-72 w-full object-cover">
                        <h4 class="mt-2 text-base font-semibold group-hover:text-pink-600 transition-all">{{$article->title}}</h4>
                        @if ($article->body)
                            <p class="mt-1 text-md sm:text-base font-semibold text-justify text-slate-600 group-hover:text-pink-500 transition-all">{{ Str::limit($article->body, 100, '...') }}</p>
                        @endif
                    </div>
                </a>
            @empty

            @endforelse
        </div>
    </div>
    @include('partials.footer')
</x-guest-layout>
