<div class="pt-16"></div>
<hr>
<div class="">
    <div class="container mx-auto pt-20">
        <div class="grid grid-cols-7 gap-2">
            <div><img src=" {{asset('storage/base/peru-brand.png')}}"  alt=""></div>
            <div><img src=" {{asset('storage/base/world-travel-adwards.png')}}" alt=""></div>
            <div><img src=" {{asset('storage/base/safe-travels.png')}}" alt=""></div>
            <div><img src=" {{asset('storage/base/member-adventure-travel.png')}}"  alt=""></div>
            <div><img src=" {{asset('storage/base/luxury-adwards.png')}}"  alt=""></div>
            <div><img src=" {{asset('storage/base/lata.png')}}"  alt=""></div>
            <div><img src=" {{asset('storage/base/asta-travel-advisor.png')}}"  alt=""></div>               
          </div>
    </div>
    <div class="container mx-auto pb-5 px-4 ">
        <div class="flex flex-wrap pt-10">
            <div class="w-3/4 md:w-1/4 p-3">
                <div class="uppercase py-5 tracking-widest text-base text-nile-500 font-medium">contact us</div>
                <h5 class="font-bold">Kimsa Travel Agency</h5>
                <p class="pb-1 text-sm">APV. Zaguan del Cielo, K - 1, Cusco</p>
                <p class="pb-3">Cusco, Cusco, Peru</p>

                <p class="italic">Kimsa Travel Agency S.A.C.</p>                
                <p class="pb-3 italic">RUC: 2040675632</p>
                
                <div class="pb-10">
                    <a href="https://www.facebook.com/kimsatravelagency/" target="_blank"><i class="fab fa-facebook text-3xl pr-1"></i></a>
                    {{-- <a href=""><i class="fab fa-twitter-square text-3xl px-1"></i></a> --}}
                    <a href="https://www.instagram.com/kimsatravelagency/"><i class="fab fa-instagram text-3xl px-1"></i></a>
                    {{-- <a href=""><i class="fab fa-skype text-3xl px-1"></i></a> --}}
                </div>


                <hr class="w-full">
                <div class="flex items-center pt-3">
                    <a href="#" class="text-gray-800 text-sm  hover:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-nile-500 mr-3"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>+51 930 977 135</a>

                </div>
                {{-- <div class="flex items-center pt-1">
                    <a href="#" class="text-gray-800 bold  hover:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-nile-500 mr-3"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>+51 999 999 999</a>
                </div> --}}
                <div class="flex items-center pt-3">
                    <a href="#" class="text-gray-800 text-sm  hover:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-nile-500 mr-3"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>enquire@kimsatravel.com</a>
                </div>
            </div>
            <div class="w-3/4 md:w-1/4 p-3">
                <div class="uppercase py-5 tracking-widest text-base md:text-base text-nile-500 font-medium"> join our team</div>
                <p>If you are inspired by travel, then we want to hear from you.</p>
            </div>
            <div class="w-1/2 md:w-1/4 p-3">
                <div class="uppercase py-5 tracking-widest text-base md:text-base text-nile-500 font-medium">destinations</div>
                <ul class="px-3 uppercase space-y-3" style="letter-spacing: 0.3em">
                    @foreach ($nations as $nation)
                        <li> <a href=" {{ route('nations.show', $nation) }} ">{{ $nation->name }}</a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-1/2 md:w-1/4 p-3">
                <div class="uppercase py-5 tracking-widest text-base md:text-base text-nile-500 font-medium"> join our team</div>
                <p>If you are inspired by travel, then we want to hear from you.</p>
            </div>
        </div>
    </div>


    {{-- agent system --}}
    <div class=" border-t-2 py-3 border-nile-500 tracking-normal">
        <div class="container mx-auto ">

            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-8 py-2 md:py-0">
                    <p class="text-sm text-center">© Copyright © 2021 Kimsa Travel, All rights reserved Established 2012 - Based in Cusco, Peru</p>
                </div>
                <div class="col-span-12 md:col-span-4 justify-between py-2 md:py-0">                    
                    <div class="xs:flex md:block">
                        <a href="{{ route('login') }}" class="px-3 font-bold text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg> Agent area</a>
                    <a href="" class="px-3 text-sm">Ter. & Cond.</a>
                    <a href="" class="px-3 text-sm">Join our team</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
