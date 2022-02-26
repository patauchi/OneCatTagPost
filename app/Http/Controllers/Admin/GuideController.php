<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.guides.index')->only('index');
        $this->middleware('can:admin.guides.create')->only('create','store');
        $this->middleware('can:admin.guides.edit')->only('edit','update');
        $this->middleware('can:admin.guides.destroy')->only('destroy');
    }
    public function index()
    {
        $guides = Guide::all();
        return view('admin.guides.index', compact('guides'));
    }

    public function create()
    {
        return view('admin.guides.create');
    }

    public function store(Request $request)
    {
        $guide =  Guide::create($request->all());
        return redirect()->route('admin.guides.index', $guide)->with('info', 'La Entrada se ha creado con exito!');
    }

 
    public function edit(Guide $guide)
    {
        return view('admin.guides.edit', compact('guide'));
    }

    public function update(Request $request, Guide $guide)
    {
        $guide->update($request->all());
        return redirect()->route('admin.guides.index', $guide)->with('info', 'La entrada se ha actualizado con exito!');
    }

    public function destroy(Guide $guide)
    {
        $guide -> delete();
        return redirect()->route('admin.guides.index', $guide)->with('info', 'La Entrada se ha eliminado con exito!');
    }
}
