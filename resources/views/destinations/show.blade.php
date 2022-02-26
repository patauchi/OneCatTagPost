<x-app-layout>

    <main>
        {{-- Slider --}}
        <section class="flex">
            <div class="w-full mx-auto">
                <img class="object-cover w-full" style="height: 550px;" 
                src=" 
            @if ($destination->imagefull) {{Storage::url($destination->imagefull->url)}}
                @else
                'https://via.placeholder.com/1920x550'
                @endif
            
            "

                    alt="Place {{$destination->name}} ">
            </div>
        </section>

        <div class="container mx-auto -mt-96 mb-52">
            <div class="text-center py-15">Nation: {{ $nation->name }} </div>
            <h1 class="text-5xl text-center">destination: {{ $destination->name }} </h1>
            <h2 class="text-normal text-center py-10"> TAILORMADE TRIP PERU </h2>
        </div>


        {{-- CONTENT --}}
        <div class="container mx-auto py-10 px-2 lg:px-5">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-12 lg:col-span-8">
                    <p class="text-xs md:text-sm font-medium tracking-widest uppercase px-2"> {{ $nation->primgraph }}
                    </p>
                    <div class="py-10 px-2 md:py-14 md:px-12">
                        <p class="text-xl md:text-3xl text-nile-500 font-thin border-l-4 border-gold-600 pl-6">
                            {{ $nation->quotation }} </p>
                    </div>
                    <p class="font-light px-2"> {{ $nation->abstract }} </p>

                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-4 pt-5 md:pt-1">
                    <div class="bg-gray-200 lg:-mt-36 p-4 md:p-12 lg:ml-5 tracking-wider shadow-md">
                        <p class="italic text-center uppercase text-2xl pb-3"> {{ $nation->sidetitle }} </p>
                        <p class="italic tracking-wider"> {{ $nation->sidebody }} </p>
                    </div>
                </div>

            </div>

        </div>

       {{-- Tours --}}
    <section class="bg-nile-500   overflow-hidden text-gray-700 pt-20">
        <div class=" mx-auto">
            <h2 class="text-center text-white uppercase pb-4"><span class="text-3xl font-thin">Enjoy private guided
                    travel around</span> <br> <span class="text-4xl">the South America</span>
            </h2>
            <p class="text-center text-xl text-gray-500">We work hand-in-hand with you to craft a truly tailor-made
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
                                    <h2 class="text-2xl text-gray-900 font-medium title-font mb-2"> <a
                                            href="{{ route('tours.show', $tour) }}">{{ $tour->name }}</a>
                                    </h2>
                                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
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
                                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>

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
                                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>

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
                                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>

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


        {{-- Content --}}
        <div class="container mx-auto py-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-7">
                    <h2 class="text-center text-2xl px-2"> PERU DESTINATION GUIDE: WHERE TO GO IN {{ $destination->name }}
                    </h2>
                    <p class="leading-7 px-3"> {{ $destination->body }}</p>
                </div>
                <div class="col-span-12 md:col-span-5 py-3">
                    <h3 class="text-center text-2xl"> BANNER</h3>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="container mx-auto">
            <h2 class="text-left text-2xl uppercase font-thin p-2">HIGHLY RECOMMENDED ACCOMMODATIONS IN
                {{ $nation->name }} </h2>
            <hr>
            <p class="py-8 px-2">Peru boasts beauiful properties, from luxurious hotels to stylish boutique
                retreats. Whether you’re looking for the best suite in a top-notch five-star hotel or a charming
                bolt-hole in a hidden corner of Peru, there are options to suit all tastes and budgets. These are some
                of our favorite places to stay in Peru.
            </p>
            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-2 py-2 mx-auto ">
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        @foreach ($hotels as $hotel)
                            <div class="md:flex flex-wrap w-1/2 md:w-1/4 p-2">
                                <div class=" w-full bg-gray-100 py-20 px-10 relative mb-4">
                                    <a href="  {{ route('hotels.show', $hotel) }}">
                                        <img hre alt="gallery"
                                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                            src=" 
                                                @if ($hotel->image) {{Storage::url($hotel->image->url)}}
                                                    @else
                                                    'https://via.placeholder.com/600x400'
                                                    @endif                                                                                            
                                                ">
                                        </a>
                                    <div class="text-center relative z-10 w-full">
                                        <p class="leading-relaxed"> {{ $hotel->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </section>
        </div>
        

        <div class="container mx-auto">
            <h2 class="text-left text-2xl uppercase font-thin py-2">DESTINATIONS IN {{ $destination->name }} </h2>
            <hr>
            <p class="py-8">Peru boasts beauiful properties, from luxurious hotels to stylish boutique
                retreats. Whether you’re looking for the best suite in a top-notch five-star hotel or a charming
                bolt-hole in a hidden corner of Peru, there are options to suit all tastes and budgets. These are some
                of our favorite places to stay in Peru.

            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-5 py-2 mx-auto ">
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        @foreach ($similares as $similar)
                            <div class="flex flex-wrap w-1/2 md:w-1/4 p-2">
                                <div class=" w-full bg-gray-100 py-20 px-10 relative mb-4">
                                    <a href="{{ route('destinations.show', [$nation, $similar]) }}">
                                        <img hre
                                            alt="gallery"
                                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                            src=" 
                                                @if ($similar->image) {{Storage::url($similar->image->url)}}
                                                    @else
                                                    'https://via.placeholder.com/600x400'
                                                    @endif                                                                                            
                                                ">
                                        </a>
                                    <div class="text-center relative z-10 w-full">
                                        <p class="leading-relaxed"> {{ $similar->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </section>



        </div>
    </main>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

</x-app-layout>
