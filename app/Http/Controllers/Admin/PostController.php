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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('author',$post);

        $tags = Tag::all();
        $categories = Category::pluck('name','id');
        return view('admin.posts.edit', compact('post','tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        // if($request->tags){
        //     $post->tags()->sync([$request->tags]);
        //  }

        //  foreach ($request->tags as $tag_id){
        //     $post->tags()->sync($tag_id);
        // }

        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('author',$post);
        $post -> delete();

        return redirect()->route('admin.posts.index')->with('info', 'El post se ha eliminado con exito!');
   
    }
}
