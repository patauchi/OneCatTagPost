<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:admin.tags.index')->only('index');
        $this->middleware('can:admin.tags.create')->only('create','store');
        $this->middleware('can:admin.tags.edit')->only('edit','update');
        $this->middleware('can:admin.tags.destroy')->only('destroy');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }


    public function create()

    {
        $colours = [
            'red' => 'Color rojo',
            'blue' => 'Color azul',
            'green' => 'Color verde'
        ];
        return view('admin.tags.create', compact('colours'));      //
    }


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


    public function show($tag)
    {
      return view('admin.tags.show', compact($tag));  //
    }

 
    public function edit(Tag $tag)

    {
        $colours = [
            'red' => 'Color rojo',
            'blue' => 'Color azul',
            'green' => 'Color verde'
        ];
      return view('admin.tags.edit', compact('tag','colours'));  //
    }


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

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index', $tag)->with('info', 'La etiqueta se ha eliminado con exito!');

    }
}
