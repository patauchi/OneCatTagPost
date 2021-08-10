<x-app-layout>
   
    <div class="boxContainer max-w-5xl py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post"/>
        @endforeach

        <div class="mt-4">
            {{$posts->links()}}
        </div>


    </div>

</x-app-layout>