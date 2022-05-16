<x-guest-layout>
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full pb-4 border-b-4 border-b-pink-300 text-4xl font-bold text-pink-600">About Us</div>
        <div class="grid grid-cols-2 gap-12 mt-12">
            <div class="col-span-2 sm:col-span-1 flex flex-col justify-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-pink-600">{{__("Who we are?")}}</h2>
                <p class="mt-4 text-md sm:text-base font-semibold text-justify text-slate-600">
                    Broward Fierce Fighters, Inc is an organization founded in October 2016. Broward Fierce Fighters is a 501(c)(3) non-profit organization focus on breast health awareness and well-being of breast cancer survivors. Membership is open to breast cancer survivors, their families, friends, and supporters. However family friends and supporters will not be able to race with the team. Paddlers report increased fitness levels by being physically active and a sense of well being and empowerment, which are important elements to minimize recurrence. We provide a strong support group, camaraderie, friendship, sisterhood, while having fun in the process.
                </p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <img src="https://static.wixstatic.com/media/c425a6_d53422f4eadd41ae9a4f1ada03bb9b9a~mv2_d_1848_1224_s_2.jpg/v1/fill/w_1632,h_1081,al_c,q_85,usm_0.66_1.00_0.01/c425a6_d53422f4eadd41ae9a4f1ada03bb9b9a~mv2_d_1848_1224_s_2.webp" alt="" class="aspect-video h-full w-full object-cover">
            </div>

            <div class="col-span-2 sm:col-span-1">
                <img src="https://static.wixstatic.com/media/c425a6_eb470e054b4b4267b54a1614340733d6~mv2.jpg/v1/fill/w_960,h_540,al_c,q_85/c425a6_eb470e054b4b4267b54a1614340733d6~mv2.webp" alt="" class="aspect-video h-full w-full object-cover">
            </div>
            <div class="col-span-2 sm:col-span-1 flex flex-col justify-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-pink-600">{{__("About Dragon Boating")}}</h2>
                <p class="mt-4 text-md sm:text-base font-semibold text-justify text-slate-600">
                    Dragon Boat Racing has ancient Chinese origins and its history has been traced back to more than 2000 years. The first participants were superstitious Chinese villagers who celebrated the 5th day of the 5th lunar month of the Chinese calendar. Racing was held to avert misfortune and encourage the rains needed for prosperity and the object of their worship was the dragon. The dragon of Asia has traditionally been a symbol of water. It is said to rule the rivers and seas and dominate the clouds and rains. Deeply rooted in rich Chinese culture, the dragon symbolizes strength, prosperity, and blessings.
                </p>
            </div>

            <div class="col-span-2 sm:col-span-1 flex flex-col justify-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-pink-600">{{__("Dragon Boating and Breast Cancer")}}</h2>
                <p class="mt-4 text-md sm:text-base font-semibold text-justify text-slate-600">
                    Dragon boating became associated with breast cancer survivors in 1996 because of Dr. Don McKenzie who is a sports medicine physician at the University of British Columbia. He recruited 24 breast cancer patients to participate in this sport which proved that upper body exercise was beneficial and reduced lymphedema contrary to common belief. In addition, the team provided emotional support, camaraderie and an information system for this deadly disease that now affects 1 in 8 women over their lifetimes.
                </p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <img src="https://static.wixstatic.com/media/c425a6_d53422f4eadd41ae9a4f1ada03bb9b9a~mv2_d_1848_1224_s_2.jpg/v1/fill/w_1632,h_1081,al_c,q_85,usm_0.66_1.00_0.01/c425a6_d53422f4eadd41ae9a4f1ada03bb9b9a~mv2_d_1848_1224_s_2.webp" alt="" class="aspect-video h-full w-full object-cover">
            </div>
        </div>
    </div>
    @include('partials.footer')
</x-guest-layout>
