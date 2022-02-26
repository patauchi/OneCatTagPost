<x-app-layout>
    {{-- Hidden --}}
    <div class=" carousel rounded relative overflow-hidden shadow-xl z-0">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0 bg-center bg-cover"
                style="height:750px; background-image: 
                url( {{asset('storage/base/machupicchu-peru.webp')}} )">

            </div>
            <label for="carousel-3"
                class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto flex justify-center content-center"><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!--Slide 2-->
            <input class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                hidden="">
            <div class="carousel-item absolute opacity-0 bg-center bg-cover"
                style="height:750px; background-image: 
                 
                 url( {{asset('storage/base/galapagos-bartolome-ecuador.webp')}} )">
            </div>
            <label for="carousel-1"
                class=" control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!--Slide 3-->
            <input class="carousel-open hidden" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                hidden="">
            <div class="carousel-item absolute opacity-0 bg-center bg-cover" 
                style="height:750px; background-image: 
                 url( {{asset('storage/base/uyuni-salar-sunset-bolivia.webp')}} )">
            </div>
            <label for="carousel-2"
                class="control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-pompadour-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators ">
                <li class="inline-block mr-3 ">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
            </ol>

        </div>
    </div>
    {{-- Mobile --}}
    {{-- <div class="flex sm:hidden h-screen bg-gray-200">
        <div>Pioneers in extraordinary experiences</div>
    </div> --}}

    <div class="container mx-auto z-20 " style="margin-top: -700px">
        <div class="text-4xl lg:text-5xl font-light opacity-90 text-white px-2 text-center md:text-left">Pioneers in extraordinary experiences</div>
        <div class="text-xl lg:text-2xl font-thin opacity-90 text-white py-4 px-2 text-center md:text-left" style="letter-spacing: 0.2em">Pursue your Dreams, Inspire your Memories</div>
        <div class="text-xl lg:text-2xl font-thin opacity-90 text-white py-4 px-2 text-center md:text-left">
            <button class="tracking-1 text-white bg-transparent border border-solid border-white hover:bg-white hover:text-nile-500 active:text-nile-500 font-semibold  uppercase text-sm px-14 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 " type="button"> 
                <a href="#">Discover</a>    
            </button>
        </div>

        
    </div>
    <div class="container  mx-auto z-50 lg:px-8" style="margin-top: 380px">
        <div class="flex flex-wrap justify-between items-end text-base md:text-4xl font-light opacity-90  text-white px-2">
            <div class="w-4/12 inline-flex space-x-4">
                <img class="w-2/12" src=" {{asset('storage/base/condenast-traveler-2022.png')}}" alt="" >
                <img class="w-2/12" src=" {{asset('storage/base/safe-travels-2022.png')}}" alt="" >
                <img class="w-2/12" src=" {{asset('storage/base/wendyPerrin-2022.png')}}" alt="" >
            </div>
            <div class="w-8/12 text-xl uppercase text-center" style="letter-spacing: 0.3em">Real experiences, experience south america</div>
        </div>
    </div>

  

    {{-- Content --}} 
    <div class="container mx-auto pt-16 md:pt-24 pb-20  bg-white">
        <div class=" sm:flex px-3 sm:px-6 lg:px-8">
            <div class=" w-full md:w-2/3 md:text-left px-2 md:px-10">
                <h3 class="uppercase text-4xl font-regular font-cormorant pt-10 text-nile-500  text-center sm:text-center py-5">w<span class="text-3xl">hy travel with kimsa travel?</span></h3>
                {{-- <h1 class="uppercase text-xl font-thin py-3 text-nile-500">why spend time with tinta travel?</h1> --}}
                <p class="max-w-3xl mx-auto font-extralight text-base leading-8">Since 2012, we have operated extraordinary and unique luxury travel 
                    holidays with an original focus on taking our travelers along of the Latin America. From our beginning, <span class="font-medium">KIMSA TRAVEL</span> was 
                    the travel company to innovate and personalize comfort trip experiences in <a class="text-pompadour-500 font-bold" href="#">Peru</a>,
                     <a class="text-pompadour-500 font-bold" href="#">Bolivia</a> and <a class="text-pompadour-500 font-bold" href="#">Ecuador</a>. We are the pioneers 
                    in designing amazing and unique itineraries, and many tourists -hikers say that our tours start where other end. As the 
                    leader’s luxury travel agency, we are constantly innovating in tourism industry and by this reason we are recognized as
                     one of the world’s top experts.</p>
                     <p class="max-w-3xl mx-auto text-base leading-8 font-extralight">We work closely with our customers, our extraordinary travel team use their deep knowledge about of top travel destinations in order to carefully curate every journey, keeping in their mind create the best travel experiences.</p>
                     
                <p class="text-right py-5 italic font-medium">Contact US, we are here for serving you</p>
            </div>
            <div class="w-full md:w-1/3 md:py-10 mx-auto">
                <img src=" {{ asset('base/latin-america-map.webp') }} " class="mx-auto" alt="">
            </div>

        </div>

        {{-- <p class="text-6xl font-italiano text-center pt-10">Solo or with your family... Live Andean Experience</p> --}}

    </div>


    {{-- Content --}}
    <div class=" bg-gray-50 pt-5 pb-10">
        <div class=" max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class=" py-5">
                
                <div class="grid grid-cols-12 gap-4 items-center px-20">
                    <div class="col-span-4"><img class="" src="{{ asset('/base/logo2.svg') }} " alt="logo"></div>
                    <div class="col-span-8"><h2 class="uppercase text-2xl text-nile-500 text-right font-cormorant font-regular" >WHAT SETS US APART?</h2></div>
                </div>


             

                {{-- <p class="max-w-3xl mx-auto font-light text-lg">Personalized, y start. Founded by Marisol Mosquera
                    in 1996, Ardrawing on our unrivaled access, insider knowledge and network of experts to create
                    the very best travel experiences. Contact us today to start planning your adventure.</p> --}}
                    <div class="relative block p-3 lg:p-3">
                        
                        
                    </div>
                <div class="md:flex pt-6 pb-5">
                    <div class="w-full md:w-1/3 px-4">
                        <h3 class="uppercase text-base font-medium py-4 text-center text-back tracking-wider">Personalized package </h3>
                        <p class="leading-8 text-sm tracking-wider">Every trip we design is highly customized with our expert travel designers. We will plan your tour around your preferences and specific interests.</p>
                        <p class="leading-8 text-sm tracking-wider">Traveling with a private guide and driver you’ll do what you want, when you want with the freedom to change your plans at the moment.    </p>

                    </div>
                    <div class="w-ful md:w-1/3 px-4">
                        <h3 class="uppercase text-base font-medium py-4 text-center text-black tracking-wider">Extraordinary experiences</h3>
                        <p class="leading-8 text-sm tracking-wider">Our expert designers and brilliant travel concierges are highly qualified to show you every extension and activities within each destination. Our partners allow us to offer exclusive and distinctive doings. You will immerse in local and culturally experiences, you will live authentic experiences.</p>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <h3 class="uppercase text-base font-medium py-4 text-center text-black tracking-wider">Travel with a purpose</h3>
                        <p class="leading-8 text-sm tracking-wider">We care about our every region where we can operate. In this sense, our luxury trips are thought with responsibility travel principles, we’re contributing with reforestation activities, we use environmental education to promote the wildlife conservation, and we encourages research initiatives each country.</p>
                    </div>

                </div>
            </div>





        </div>
    </div>

    {{-- Section --}}
    <div class="py-10 bg-nile-500">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-center text-gold-600 text-lg font-semibold">LUXURY TAILOR MADE</p>
                <h2 class="uppercase text-2xl font-extralight text-white pb-5 text-center">why spend time with tinta travel?</h2>
                <p class="max-w-4xl mx-auto font-thin text-base text-white leading-8">Personalized, purposeful and extraordinary:
                    this was
                    our ethos from the very start. Founded by Marisol Mosquera in 1996, Aracari was the first travel
                    company to offer sustainable, luxury travel experiences in Peru, Bolivia, Ecuador and The
                    Galapagos. We are proud to call ourselves pioneers to thiso create the very best travel
                    experiences. Contact us today to start planning your adventure.
                </p>
                {{-- <h3 class="text-center md:text-left text-xl text-white font-regular py-6 font-cormorant uppercase">Best destinations to visit in South America</h3> --}}

                <div class="grid grid-cols-12 py-5">

                    @foreach ($nations as $nation)
                        <div class="col-span-4">
                            <div class="shadow-md rounded-md overflow-hidden p-1">

                                <a href="{{ route('nations.show', $nation) }}">
                                    <img class="w-max"
                                                src=" 
                                                @if ($nation->image) {{Storage::url($nation->image->url)}}
                                                    @else
                                                    'https://via.placeholder.com/500x600'
                                                    @endif                                                                                            
                                                " alt="">
                                </a>
                                <div class="p-4">
                                    <h5 class="text-xl font-regular text-white uppercase"><a
                                            href="{{ route('nations.show', $nation) }} ">{{ $nation->name }}</a>
                                    </h5>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                {{-- <div class="text-center">
                    <button
                    class="bg-gold-500 text-white active:bg-purple-600 font-normal uppercase text-xs px-10 py-3 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button">
                    Tailer Made Travel Request
                </button> --}}
                </div>

            </div>

        </div>
    </div>


    {{-- Tours --}}
    <section class="bg-white   overflow-hidden text-gray-700 pt-20">
        <div class=" mx-auto">
            <h2 class="text-center text-nile-500 uppercase pb-4"><span class="text-lg tracking-1">Enjoy private guided
                    travel around</span> <br> <span class="text-3xl font-normal tracking-2">the South America</span>
            </h2>
            <p class="text-center text-sm text-black tracking-wider uppercase">We work hand-in-hand with you to craft a truly tailor-made
                Latin america
                travel experience </p>
        </div>

        <div class="container px-5 pt-10 pb-16 mx-auto md:flex flex-wrap">

            @foreach ($tours as $tour)
                @if ($loop->first)
                    <a class="z-10" href="{{ route('tours.show', $tour) }}">
                        <div class="lg:w-1/3 mx-auto">

                            <div class="md:flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4 md:h-full lg:-mx-2 rounded-xl">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                    src=" 
            @if ($tour->image) {{Storage::url($tour->image->url)}}
                @else
                'https://via.placeholder.com/1920x550'
                @endif            
            "  >
                                <div class="text-center relative w-full">
                                    <h2 class="text-xl text-black font-medium title-font mb-2   "> <a
                                            href="{{ route('tours.show', $tour) }}">{{ $tour->name }}</a>
                                    </h2>
                                    <p class="text-sm leading-5 py-3">Skateboard +1 mustache fixie paleo lumbersexual.</p>

                                    <p class="leading-relaxed uppercase font-light text-sm tracking-1">explore this trip</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif



                @if ($loop->iteration == 2)
                    <div class=" lg:w-2/3 mx-auto">
                        <a class="z-10" href="{{ route('tours.show', $tour) }}">
                            <div class="md:flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4 rounded-xl">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                    src=" 
            @if ($tour->image) {{Storage::url($tour->image->url)}}
                @else
                'https://via.placeholder.com/8220x340'
                @endif            
            ">
                                <div class="text-center relative z-10 w-full">
                                    <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">{{ $tour->name }}
                                    </h2>
                                    <p class="text-sm leading-5 py-3">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                                    <p class="leading-relaxed uppercase font-light text-sm tracking-1">explore this trip</p>


                                </div>
                            </div>
                        </a>
                        <div class="md:flex lg:-mx-2">
                @endif
                @if ($loop->iteration == 3)
                    <div class="py-2 px-1 w-full md:w-1/2">
                        <a class="z-10" href="{{ route('tours.show', $tour) }}">
                            <div class="flex flex-wrap w-full md:h-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative rounded-xl">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                    src=" 
            @if ($tour->image) {{Storage::url($tour->image->url)}}
                @else
                'https://via.placeholder.com/550x460'
                @endif            
            ">
                                <div class="text-center relative w-full">
                                    <h2 class="text-xl text-gray-900 font-medium title-font mb-2"> {{ $tour->name }}
                                    </h2>
                                    <p class="text-sm leading-5 py-3">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                                    <p class="leading-relaxed uppercase font-light text-sm tracking-1">explore this trip</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                @if ($loop->iteration == 4)
                    <div class="py-2 px-1 md:w-1/2">
                        <a class="z-10" href="{{ route('tours.show', $tour) }}">
                            <div class="md:flex flex-wrap w-full md:h-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative rounded-xl">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                    src=" 
            @if ($tour->image) {{Storage::url($tour->image->url)}}
                @else
                'https://via.placeholder.com/550x460'
                @endif            
            ">
                                <div class="text-center relativew-full">
                                    <h2 class="text-xl text-gray-900 font-medium title-font mb-2">{{ $tour->name }}
                                    </h2>
                                    <p class="text-sm leading-5 py-3">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                                    <p class="leading-relaxed uppercase font-light">explore this trip</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endif

            @endforeach
        </div>
        </div>

        </div>
        <div class="text-center">

        </div>

    </section>


    <div class="flex items-center justify-center h-96 bg-fixed bg-center bg-cover bg-gray-300">
        <div class="p-5 text-gray-800 w-2/3">
            <h3 class="text-center text-4xl text-white font-medium">JOIN THE NEWSLETTER</h3>
            <p class="py-5 text-center text-xl text-white">For travel inspiration and insights</p>
            <div class="px-4 pt-3 pb-4 -mx-4 ">
                <div class="max-w-xl mx-auto">
                    <p class="text-gray-900 text-xs uppercase text-center">
                        Latest news ,articles and updates montly delevered to your inbox.
                    </p>
                    <form action="#" class="mt-2">
                        <div class="flex items-center">
                            <input type="email" class="w-full px-2 py-4 mr-2  bg-gray-100 shadow-inner rounded-md border border-gray-400 focus:outline-none" required>
                            <button class="bg-pompadour-600 text-white px-5 py-2 rounded shadow " style="margin-left: -7.8rem;">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    

    <style>
        .custom-img {
            background-image: url("https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1955&q=80");
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>
</x-app-layout>
