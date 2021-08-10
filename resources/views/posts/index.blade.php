<x-app-layout>

    <div class="boxContainer py-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ( $posts as $post )
            <article class="w-full h-80 bg-cover bg-center
                @if ($loop->first) md:col-span-2 
                @endif" 
                style="background-image:url(
                    @if ($post->image) {{Storage::url($post->image->url)}}
                    @else
                    'https://images.squarespace-cdn.com/content/v1/57263bf8f8baf385ff61bb09/1535668320137-NZQPOXCGLFT34I9E4Z1E/Screen+Shot+2018-08-30+at+6.17.10+PM.png'
                    @endif
                )"> 

                <div class="w-full h-full px-8 flex flex-col justify-center">
                    <div>
                        @foreach($post->tags as $tag)
                        <a href=" {{route('posts.tag',$tag)}} " class="inline-block px-3 h-6 bg-gray-500 text-white rounded-full">{{$tag->name}}</a>

                       {{--  <a href="#" class="inline-block px-3 h-6 bg-{{$tag->color}} text-white rounded-full">{{$tag->name}}</a> --}}

                        @endforeach

                    </div>
                    <h1 class="text-2xl text-white leading-8 font-bold">
                        <a href=" {{route('posts.show', $post)}} "> {{$post->name}} </a>
                    </h1>
                </div>
            </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>