<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Contact Us</div>
        <div class="grid grid-cols-2 gap-12 mt-12">
            <div class="col-span-2 sm:col-span-1">
                <div class="mt-4 text-md sm:text-base font-semibold text-justify text-slate-600">Want to join the team or want to make an inquiry? Please contact us using the information below, or have us reach back to you using the contact form on this page.</div>
                <div class="my-6">
                    <a href="tel:+17864574578" class="flex items-center gap-2 text-slate-600 hover:text-pink-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:animate-ping" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span class="font-semibold">+1 (786) 457-4578</span>
                    </a>
                </div>
                <div class="my-6">
                    <a href="mailto:admin@browardfiercefighters.org" class="flex items-center gap-2 text-slate-600 hover:text-pink-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:animate-ping rotate-45" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                        <span class="font-semibold">admin@browardfiercefighters.org</span>
                    </a>
                </div>
                <div class="border-t border-slate-200"></div>
                <div class="my-6">
                    <a href="https://www.google.com/maps/place/Hollywood+Rowing+Club/@26.019448,-80.123" class="mb-3 flex items-center gap-2 text-slate-600">
                        <span class="font-semibold">Practice site:</span> Holland Park (click map for directions)
                    </a>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.429786261641!2d-80.12407348461265!3d26.01949010423161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ab17c76511f3%3A0xc8dab8c4269af607!2s801%20Johnson%20St%2C%20Hollywood%2C%20FL%2033019!5e0!3m2!1sen!2sus!4v1646242600290!5m2!1sen!2sus" class="w-full h-44" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="my-3"></div>
                    <a href="/events?q=practice" class="inline-flex items-center text-xs uppercase font-bold tracking-wider rounded-md text-pink-400 hover:text-pink-500 transition-all">
                        Practice dates and times
                    </a>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1">
                @livewire('web.contact.form')
            </div>
        </div>
    </div>

    @include('partials.footer')
</x-guest-layout>
