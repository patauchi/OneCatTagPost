<x-app-layout>

    <div class="boxContainer py-8">
        <div class='text-4x1 font-bold text-black'> {{$post->name}} </div>
        <div class='text-lg font-bold text-gray-60'> {!!$post->extract!!} </div>
    
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>

                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}">
                    @else
                    <img class="w-full h-72 object-cover object-center" src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
                    @endif




                </figure>
    
                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>


            <aside>
                <h2 class="text-bold">Maás en  {{$post->category->name}} </h2>

                <ul>
                    @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a class="flex">


                     @if ($similar->image)
                        <img  class="w-36 h-20 object-cover object-center" src=" {{Storage::url($similar->image->url)}} ">
                    @else
                    <img class="w-full h-72 object-cover object-center" src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">



                    @endif



                            <span class="ml-2" > {{$similar->name}} </span>
                        </a>
                    </li>
                        
                    @endforeach
                </ul>


            </aside>

        </div>

        


    
    
    </div>



</x-app-layout> 