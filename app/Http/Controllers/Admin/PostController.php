<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create','store');
        $this->middleware('can:admin.posts.edit')->only('edit','update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.posts.index');
    }


    public function create()
    {
        $categories = Category::pluck('name','id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories','tags'));
    }


    public function store(StorePostRequest $request)
    {
                

        $post =  Post::create($request->all());

         if($request->file('file')){
            Storage::put('Public/posts',$request->file('file'));
            $url2 = Storage::put('posts',$request->file('file'));
            $post->image()->create([
                'url'=> $url2
            ]);
         }

        //  foreach ($request->tags as $tag_id){
        //     $post->tags()->attach($tag_id);
        // }
        $post->save();
        if (isset($request->tags)) {
            $post->tags()->sync($request->tags, false);
        } else {
            $post->tags()->sync(array());
        }

        //return $post;

        // // return $posts;
         return redirect()->route('admin.posts.index', $post)->with('info','El post se ha creado con exito');


    }


    public function show(Post $post)
    {
        
        return view('admin.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $this->authorize('author',$post);

        $tags = Tag::all();
        $categories = Category::pluck('name','id');
        return view('admin.posts.edit', compact('post','tags','categories'));
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $this->authorize('author',$post);
        $post->update($request->all());

        if($request->file('file')) {
            Storage::put('Public/posts', $request->file('file'));
            $url = Storage::put('posts', $request->file('file'));

            if($post->image){
                Storage::delete('Public/'. $post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url'=> $url
                ]);

            }
        }

       
        $post->save();
        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        } else {
            $post->tags()->sync(array());
        }

        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se actualizó con exito');
    }


    public function destroy(Post $post)
    {
        $this->authorize('author',$post);
        $post -> delete();

        return redirect()->route('admin.posts.index')->with('info', 'El post se ha eliminado con exito!');
   
    }
}
