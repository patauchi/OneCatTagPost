@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if($post->image)
    <img class="w-full h-72 object-cover object-center" src=" {{Storage::url($post->image->url)}} ">
    @else
    <img class="w-full h-72 object-cover object-center" src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
    @endif

    <div class="px-6 py-8">
        <h2 class="font-bold text-xl mb-2">
            <a href=" {{route('posts.show', $post)}} "> {{$post->name }}</a>
        </h2>

        <p> {!!$post->extract!!} </p>
        @foreach($post->tags as $tag)
        <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-gray-200 rounded-full">{{$tag->name}}</a>

        {{--  <a href="#" class="inline-block px-3 h-6 bg-{{$tag->color}} text-white rounded-full">{{$tag->name}}</a> --}}

        @endforeach

    </div>
</article>