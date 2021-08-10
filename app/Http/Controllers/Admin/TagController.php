<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $colours = [
            'red' => 'Color rojo',
            'blue' => 'Color azul',
            'green' => 'Color verde'
        ];
        return view('admin.tags.create', compact('colours'));      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color'=> 'required'
        ]);

        $tags = Tag::create($request->all());

        return redirect()->route('admin.tags.index',$tags)->with('info', 'La Etiqueta se ha creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
      return view('admin.tags.show', compact($tag));  //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)

    {
        $colours = [
            'red' => 'Color rojo',
            'blue' => 'Color azul',
            'green' => 'Color verde'
        ];
      return view('admin.tags.edit', compact('tag','colours'));  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag )
    {
        $request -> validate([
            'name'=> 'required',
            'slug' => "required|unique:tags,slug, $tag->id",
            'color' => 'required'
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.index', $tag)->with('info', 'La etiqueta se ha actualizado con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index', $tag)->with('info', 'La etiqueta se ha eliminado con exito!');

    }
}
