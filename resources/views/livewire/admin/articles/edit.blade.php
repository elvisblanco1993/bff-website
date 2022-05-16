<div>
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Article') }}
                </h2>
                <div class="">
                    <label for="public" class="mr-4">
                        <x-jet-input type="checkbox" wire:model="status"/>
                        <span class="text-sm">Publish</span>
                    </label>
                    <x-jet-secondary-button wire:click="save" class="-my-2">Save</x-jet-secondary-button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-8">
                <div class="col-span-3">
                    <x-jet-input id="title" type="text" placeholder="Title" class="text-2xl" wire:model="title"/>
                    <x-jet-input-error for="title" />
                    <div class="my-6"></div>
                    <textarea wire:model="body" id="" cols="30" rows="10" placeholder="Write something amazing..."></textarea>
                </div>
                <div class="col-span-1 p-4">
                    <div class="text-lg text-gray-800 leading-tight">Upload images</div>

                    <div class="mt-8 h-44 border-2 bg-white border-slate-400 border-dashed rounded-lg p-4">
                        <label for="images" class="h-full w-full flex items-center justify-center">
                            <input id="images" type="file" class="sr-only" multiple wire:model="files" accept="image/png, image/jpeg, image/webp, image/jpg">
                            <div class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-center text-sm font-semibold text-slate-600">Click here to upload images.</span>
                            </div>
                            <x-jet-input-error for="files" />
                        </label>
                    </div>

                    <ul class="mt-4">
                        @forelse ($files as $file)
                        <li class="mt-2 text-xs flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>{{$file->getClientOriginalName()}}</span>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
