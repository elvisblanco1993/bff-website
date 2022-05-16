<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage articles') }}
            </h2>
            <a href="{{ route('admin.articles.create') }}" class="text-xs font-semibold text-slate-600 hover:bg-pink-600 hover:border-pink-600 hover:text-white transition-all tracking-wider border rounded-md uppercase px-4 py-2 -my-2">Add article</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-jet-input type="search" wire:model="search" class="w-full sm:w-1/3" placeholder="Search by title" />
            <ul class="w-full mt-6 rounded-lg">
                @forelse ($articles as $article)
                    <li @class([
                        'flex items-center justify-between bg-white border-b p-4',
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ])>
                        <div class="">{{$article->title}}</div>
                        <div class="flex items-center gap-4">
                            <a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}" class="flex items-center text-slate-400 hover:text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </a>
                            @livewire('admin.articles.delete', ['article' => $article], key('delete-'.$article->id))
                        </div>
                    </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
