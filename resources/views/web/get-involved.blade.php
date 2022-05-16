<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">Get Involved</div>

        <div class="w-full my-12">
            <h1 class="text-center text-4xl font-black text-sky-600">Broward Fierce Fighters Changes Lives.</h1>
            <p class="text-center mt-4 text-md sm:text-xl font-semibold text-slate-600">Your contribution will have an immediate impact in our program.</p>
            <p class="mt-8 text-md sm:text-base font-semibold text-justify text-slate-600">We use donations to cover costs related to the sport, including but not limited to equipment (dragon boat, paddles, vest, ect), infrastructure (storage, trailer, bigfoot, insurance, etc), travel to competitions (registration fees, hotels, etc), and more. Donations are also used for community outreach events (mammography, lymphedema therapy, education, awareness, emotional support, etc).</p>
            <p class="mt-6 text-md sm:text-base font-semibold text-justify text-slate-600">We are always looking for sponsors who share our values of teamwork, support and good health. If you or someone you know might like to sponsor or donate to this peaceful yet competitive sport, along with its fitness and team building strengths, to their employees - then we hope to hear from you!</p>

            <div class="mt-12 grid grid-cols-2 gap-8">
                <div class="col-span-2 sm:col-span-1">
                    <div class="text-md sm:text-xl font-semibold text-slate-600">Want to learn more about our sponsorship packages?</div>
                    <a href="{{asset('BFFs DRAGON BOAT TEAM SPONSORSHIP PACKAGE (Revised 10-25-18).pdf')}}" target="_blank" class="mt-4 inline-flex items-center px-4 py-2 text-xs uppercase font-bold tracking-wider rounded-md bg-pink-400 hover:bg-pink-500 text-white transition-all">Download Sponsorship Package</a>
                    <a href="{{route('contact')}}" class="ml-4 text-md sm:text-base font-semibold text-justify text-slate-600 hover:text-pink-600 transition-colors">or contact us</a>
                </div>

                <div class="">
                    <div class="text-md sm:text-xl font-semibold text-slate-600">Make a donation today!</div>
                    <iframe class="_3Xz9Z" title="Embedded Content" name="htmlComp-iframe" data-src="" src="https://www-browardfiercefighters-org.filesusr.com/html/c425a6_0f746ef505d72da4fa7f1bbe113718f9.html" width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</x-guest-layout>
