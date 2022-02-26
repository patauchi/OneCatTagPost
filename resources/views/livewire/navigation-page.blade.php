<style>
    .mega-menu {
        display: none;
        left: 0;
        position: absolute;
        text-align: left;
        width: 100%;
        z-index: 99999;
    }

    .hoverable {
        position: static;
    }

    .hoverable>a:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
        z-index: 30;
    }

    .hoverable:hover .mega-menu {
        display: block;
        z-index: 30;
    }

    .toggleable>label:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
        z-index: 30;
    }

    .toggle-input {
        display: none;
        z-index: 30;
    }

    .toggle-input:not(checked)~.mega-menu {
        display: none;
        z-index: 30;
    }

    .toggle-input:checked~.mega-menu {
        display: block;
        z-index: 30;
    }

    .toggle-input:checked+label {
        color: white;
        background: #2c5282;
        z-index: 30;
    }

    .toggle-input:checked~label:after {
        content: "\25B2";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
        z-index: 30;
    }

    .logo {
        width: 180px;
        z-index: 30;
    }

</style>

<div class="bg-gray-200 font-sans leading-normal tracking-normal z-10">
    <nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
        <div class="container mx-auto flex justify-between">
            <div class="relative block p-3 lg:p-3">
                <a href="/"><img class="logo" src="{{ asset('/base/logo2.svg') }} " alt="logo"></a>
            </div>
            <ul class="hidden md:flex">
                <!--Destination-->
                <li class="hoverable hover:bg-nile-500 hover:text-white">
                    <a href="#"
                        class="relative block py-3 px-4 lg:p-4 text-base lg:text-sm font-light hover:bg-nile-500 hover:text-white tracking-1" >DESTINATIONS</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            {{-- <div class="w-full text-white mb-8">
                                <p class="font-normal text-2xl">Latinoamerican Destinations</p>
                            </div> --}}

                            @foreach ($nations as $nation)
                                <ul
                                    class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-600 border-b sm:border-r-0 lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                    <div class="flex items-center pb-4">

                                        <a href="{{ route('nations.show', $nation) }}">
                                            <img style="width: 250px; height: 180px"
                                                src=" 
                                                @if ($nation->imagethumb) {{Storage::url($nation->imagethumb->url)}}
                                                    @else
                                                    'https://via.placeholder.com/600x400'
                                                    @endif                                                                                                
                                                " alt="">
                                            </a>
                                    </div>
                                    <span class="font-light text-xl text-pompadour-500 text-bold mb-2 uppercase"> <a
                                            href="{{ route('nations.show', $nation) }}">{{ $nation->name }}
                                        </a></span>


                                    <p class="text-gray-800 text-sm">Prioritize these line items game-plan draw a line
                                        in
                                        the sand come up with something buzzworthy UX upstream selling.</p>
                                    <div class="flex items-center py-3">

                                        <a href="{{ route('nations.show', $nation) }}"
                                            class="text-gray-800 bold hover:text-blue-300">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-nile-500 mr-2 inline-block" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            Read more</a>
                                    </div>
                                </ul>

                            @endforeach


                        </div>
                    </div>
                </li>
                <!--Travel Inspiration-->
                <li class="hoverable hover:bg-nile-500 hover:text-white">
                    <a href="#"
                        class="relative block py-3 px-4 lg:p-4 text-base lg:text-sm font-light hover:bg-nile-500 hover:text-white tracking-1	">TRAVEL
                        INSPIRATION</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-nile-500 mb-8">
                                <span class="font-normal text-sm">TRAVEL INSPIRATION</span>
                            </div>
                            <ul
                                class="px-4 w-full sm:w-1/2 lg:w-2/4 border-gray-600 border-b lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <span class="font-bold text-lg text-gray-800 text-bold mb-2">Travel Guide
                                        Book</span>
                                </div>
                                <p class="text-gray-800 text-sm">Quarterly sales are at an all-time low create spaces to
                                    explore the accountable talk and blind vampires.</p>
                                <div class="flex items-center py-3">
                                    <button
                                        class="text-nile-500 bg-transparent border border-solid border-nile-500 hover:bg-nile-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Regular
                                    </button>
                                </div>
                            </ul>
                            <ul
                                class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class=" items-center text-sm text-gray-800">
                                    <span class="text-xs text-pompadour-500 font-bold mb-2 block uppercase">Memorable Journeys                                        
                                    </span>
                                    <span class=" mb-2 block">Salar lodge</span>
                                    <span class=" mb-2 block">Cruiser wildlife</span>
                                    <span class=" mb-2 block">Machu picchu mityc</span>
                                </div>

                            </ul>
                            <ul
                                class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class=" items-center text-sm text-gray-800">
                                    <span class="text-xs text-pompadour-500 font-bold mb-2 block uppercase">Learn to be inspired</span>
                                    <span class=" mb-2 block">Peru's Culinary</span>
                                    <span class=" mb-2 block">Bolivia's Highlands</span>
                                    <span class=" mb-2 block">Galapagos' inner sea</span>
                                </div>

                            </ul>

                        </div>
                    </div>
                </li>
                <!-- Tailor made-->
                <li class="hoverable hover:bg-nile-500 hover:text-white">
                    <a href="#"
                        class="relative block py-3 px-4 lg:p-4 text-base lg:text-sm font-light hover:bg-nile-500 hover:text-white tracking-1	">TAILOR
                        MADE</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-nile-500 mb-8">
                                <span class="font-normal text-sm">TAILOR MADE JOURNEYS WITH KIMSA TRAVEL</span>
                            </div>
                            <ul
                                class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class=" items-center text-sm text-gray-800 text-light">
                                    <span class="mb-2 block">Luxury Tailor Made Travel</span>
                                    <span class="mb-2 block">Luxury Tailor Made Hotel</span>
                                    <span class="mb-2 block">Customized trip with Kimsa Travel</span>
                                </div>

                            </ul>

                            <ul
                                class="px-4 w-full sm:w-1/2 lg:w-2/3 border-gray-600 border-b lg:border-b-0 pb-6 pt-6 lg:pt-3">



                                <div class="flex ...">
                                    <div class="w-1/4 ...">
                                        <a href="#"><img class="max-w-full h-auto align-middle border-none"
                                            src="https://via.placeholder.com/150x200" alt=""></a>
                                    </div>
                                    <div class="w-3/4 ...">
                                        <p class="text-pompadour-500 text-sm uppercase">LUXURY TAILOR MADE TRAVEL</p>
                                        <p class="text-gray-800 text-sm">Created around your specific interests, Tailor
                                            Made journeys are private: just you, your companion(s), and your A&K local
                                            guide, who helps you get the most out of every day of your journey.
                                        </p>
                                        <div class="flex items-center py-3">
                                            <a href="#" class="text-gray-800 bold  hover:text-blue-300">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6 text-nile-500 mr-2 inline-block" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>Learn more</a>
                                        </div>
                                    </div>
                                </div>

                            </ul>

                        </div>
                    </div>
                </li>

                <!--About us-->
                <li class="hoverable hover:bg-nile-500 hover:text-white">
                    <a href="#"
                        class="relative block py-3 px-4 lg:p-4 text-base lg:text-sm font-light hover:bg-nile-500 hover:text-white  tracking-1">ABOUT
                        US</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2 text-gray-800 text-sm">
                            <div class="w-full text-nile-500 mb-8">
                                <span class="font-normal text-sm">LEARN MORE ABOUT KIMSA TRAVEL</span>
                            </div>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/3  pb-6 pt-6 lg:pt-3">
                                <div class="space-y-4 items-center ">
                                    <span class=" mb-2 block">About Kimsa
                                        Travel</span>
                                    <span class=" mb-2 block">Meet the Kimsa
                                        team</span>
                                    <span class=" mb-2 block">Expert and
                                        specialist guiding</span>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 pb-6 pt-6 lg:pt-3">
                                <div class="space-y-4 items-center ">
                                    <span class=" mb-2 block">Conservation
                                        Projects</span>
                                    <span class=" mb-2 block">Testimonials</span>
                                    <span class=" mb-2 block">Video
                                        Gallery</span>
                                    <span class=" mb-2 block">Press</span>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 pb-6 pt-6 lg:pt-3">
                                <div class="space-y-4 items-center ">
                                    <span class=" mb-2 block">Join our
                                        team</span>
                                    <span class=" mb-2 block">Webinars</span>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
            <div class="md:hidden flex items-center">  <span class="text-nile-500 px-2 font-bold">Menu</span>
                <button class="outline-none mobile-menu-button">
                     <svg class=" w-10 h-8 text-gray-500 hover:text-cgreen-500 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden bg-nile-500 flex items-center">
                <a href="#" class=" text-white font-thin p-2  inline-block align-middle">Inquire</a>
            </div>
            
        </div>
        <div class="hidden mobile-menu ">
            <ul class="py-1">
                 <li class=" active  ">
                     <a href="#" class="block text-sm px-2 py-5 hover:bg-pompadour-500 hover:text-white transition duration-300 uppercase">Destination</a></li>
                <li class="">    
                    <a href="#" class="block text-sm px-2 py-5 hover:bg-pompadour-500 hover:text-white transition duration-300 uppercase">Tranvel Inspiration</a></li>
                <li >
                    <a href="#" class="block text-sm px-2 py-5 hover:bg-pompadour-500  hover:text-white transition duration-300 uppercase">Tailor Made</a>
                </li>
                <li >
                    <a href="#" class="block text-sm px-2 py-5 hover:bg-pompadour-500 hover:text-white transition duration-300 uppercase" >Contact Us</a></li>
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
</div>
