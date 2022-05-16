<div>
    <div class="">
        <label for="name" class="block font-medium text-slate-700">Full name <span class="text-red-600">*</span></label>
        <input type="text" id="name" wire:model="name" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
        <x-jet-input-error for="name" />
    </div>
    <div class="mt-4">
        <label for="email" class="block font-medium text-slate-700">Email address <span class="text-red-600">*</span></label>
        <input type="email" id="email" wire:model="email" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
        <x-jet-input-error for="email" />
    </div>
    <div class="mt-4">
        <label for="phone" class="block font-medium text-slate-700">Phone number</label>
        <input type="tel" id="phone" wire:model="phone" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
    </div>
    <div class="mt-4">
        <label for="subject" class="block font-medium text-slate-700">Subject <span class="text-red-600">*</span></label>
        <input type="text" id="subject" wire:model="subject" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
        <x-jet-input-error for="subject" />
    </div>
    <div class="mt-4">
        <label for="message" class="block font-medium text-slate-700">Message <span class="text-red-600">*</span></label>
        <textarea id="message" cols="30" rows="6" wire:model="message" class="border-gray-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
        <x-jet-input-error for="message" />
    </div>
    <div class="mt-4 flex items-center justify-between">
        <div class="">
            @if (session()->has('message'))
                <span class="text-pink-600 px-4 py-3 bg-pink-50 rounded-lg">{{ session('message') }}</span>
            @endif
        </div>
        <button wire:click="save" class="flex items-center justify-center px-4 py-3 text-xs uppercase font-bold tracking-wider rounded-md bg-pink-400 hover:bg-pink-500 text-white transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
            </svg>
            <span class="ml-2">Send inquiry</span>
        </button>
    </div>
</div>
