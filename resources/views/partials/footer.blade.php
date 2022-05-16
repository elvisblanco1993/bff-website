{{-- bg-footer-waves h-96 bg-cover bg-bottom --}}
<div class="mt-24"></div>
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" class="-mb-1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(244, 114, 182, 1)" offset="0%"></stop><stop stop-color="rgba(251, 207, 232, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,99L13.3,93.5C26.7,88,53,77,80,77C106.7,77,133,88,160,77C186.7,66,213,33,240,25.7C266.7,18,293,37,320,51.3C346.7,66,373,77,400,80.7C426.7,84,453,81,480,77C506.7,73,533,70,560,69.7C586.7,70,613,73,640,75.2C666.7,77,693,77,720,73.3C746.7,70,773,62,800,51.3C826.7,40,853,26,880,27.5C906.7,29,933,48,960,51.3C986.7,55,1013,44,1040,49.5C1066.7,55,1093,77,1120,75.2C1146.7,73,1173,48,1200,38.5C1226.7,29,1253,37,1280,34.8C1306.7,33,1333,22,1360,29.3C1386.7,37,1413,62,1440,60.5C1466.7,59,1493,29,1520,14.7C1546.7,0,1573,0,1600,12.8C1626.7,26,1653,51,1680,66C1706.7,81,1733,84,1760,80.7C1786.7,77,1813,66,1840,64.2C1866.7,62,1893,70,1907,73.3L1920,77L1920,110L1906.7,110C1893.3,110,1867,110,1840,110C1813.3,110,1787,110,1760,110C1733.3,110,1707,110,1680,110C1653.3,110,1627,110,1600,110C1573.3,110,1547,110,1520,110C1493.3,110,1467,110,1440,110C1413.3,110,1387,110,1360,110C1333.3,110,1307,110,1280,110C1253.3,110,1227,110,1200,110C1173.3,110,1147,110,1120,110C1093.3,110,1067,110,1040,110C1013.3,110,987,110,960,110C933.3,110,907,110,880,110C853.3,110,827,110,800,110C773.3,110,747,110,720,110C693.3,110,667,110,640,110C613.3,110,587,110,560,110C533.3,110,507,110,480,110C453.3,110,427,110,400,110C373.3,110,347,110,320,110C293.3,110,267,110,240,110C213.3,110,187,110,160,110C133.3,110,107,110,80,110C53.3,110,27,110,13,110L0,110Z"></path></svg>
<div class="bg-pink-400 sm:h-32 border-0">
    <div class="h-full flex items-end justify-center">
        <div class="max-w-3xl mx-auto mt-6">
            <div class="sm:flex items-center justify-center gap-4">
                <a href="{{ route('home') }}"           class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Home")}}</a>
                <a href="{{ route('about') }}"          class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("About")}}</a>
                <a href="{{ route('team') }}"           class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Team")}}</a>
                <a href="{{ route('media') }}"          class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Media")}}</a>
                <a href="{{ route('events') }}"         class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Events")}}</a>
                <a href="{{ route('get-involved') }}"   class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Get involved")}}</a>
                <a href="{{ route('contact') }}"        class="block mt-2 text-center text-sm uppercase text-pink-100 hover:text-pink-200 transition-all">{{__("Contact")}}</a>
            </div>
            <div class="p-4 text-white text-center">
                Copyright © 2017 - {{Carbon\Carbon::now()->format('Y')}} Broward Fierce Fighters. All rights reserved.
            </div>
        </div>
    </div>
</div>
