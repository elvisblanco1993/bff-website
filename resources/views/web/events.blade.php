<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Upcoming Events & Practices</div>

        <div class="mt-12"></div>
        {{-- Events list --}}
        @livewire('web.events.index')
    </div>
    @include('partials.footer')
</x-guest-layout>
