<x-app-layout>
    <main>
        {{-- Slider --}}
        {{-- Slider --}}
    <section class="flex">
        <div class="w-full mx-auto">
            <img class="object-cover w-full" style="height: 300px;" 
           
            src=" 
            @if ($hotel->imagefull) {{Storage::url($hotel->imagefull->url)}}
                @else
                'https://via.placeholder.com/1920x550'
                @endif            
            "

            alt="Hotel {{$hotel->name}}">
        </div>
    </section>

    <div class="container mx-auto -mt-40 mb-10">
        {{-- <div class="text-center py-15">Nation: {{ $nation->name }} </div> --}}

        <h1 class="text-5xl text-center">hotel: {{ $hotel->name }} </h1>
        <h2 class="text-normal text-center py-10"> {{$hotel->subtitle}} </h2>
    </div>


        {{-- CONTENT --}}
        <div class="container mx-auto">
            <p class="text-center py-10 px-3"> {{$hotel->primgraph}} </p>
                    
            <div class="grid grid-cols-12 px-2">
                <div class="col-span-12 lg:col-span-8 px-1">
                    <p class="px-2"> {{$hotel->body}} </p>
                         <p class="py-3"> <strong>ACTIVITIES</strong></p>
                         
                         @foreach ($ventures as $venture )
                            <li>{{$venture->name}}</li>                             
                         @endforeach

                </div>
                <div class="hidden col-span-4">
                    <div>

                    </div>
                </div>

            </div>

        </div>

        

        <div class="container mx-auto py-5">
            <h1 class="text-center text-2xl py-5 uppercase font-thin">Galleria</h1>
            <section class="overflow-hidden text-gray-700 ">
                <div class="container py-2 mx-auto ">
                    <div class="flex flex-wrap -m-1 md:-m-2">                                           
                        <section class="overflow-hidden text-gray-700 ">
                            <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                                <div class="flex flex-wrap -m-1 md:-m-2">
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap w-1/2 md:w-1/3">
                                        <div class="w-full p-1 md:p-2">
                                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                                src="https://dummyimage.com/800x600/F3F4F7/8693ac">
                                        </div>
                                    </div>
                                </div>
                          </section>

                        




                    </div>
            </section>

            


        </div>



    </main>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

</x-app-layout>

