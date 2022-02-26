<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entrance;
use Illuminate\Http\Request;

class EntranceController extends Controller

{
    public function __construct()
    {
        $this->middleware('can:admin.entrances.index')->only('index');
        $this->middleware('can:admin.entrances.create')->only('create','store');
        $this->middleware('can:admin.entrances.edit')->only('edit','update');
        $this->middleware('can:admin.entrances.destroy')->only('destroy');
    }

    public function index()
    {
        $entrances = Entrance::all();
        return view('admin.entrances.index', compact('entrances'));
    }

 
    public function create()
    {
        return view('admin.entrances.create');
    }


    public function store(Request $request)
    {
        $entrance =  Entrance::create($request->all()); 
        return redirect()->route('admin.entrances.index', $entrance)->with('info', 'La Entrada se ha creado con exito!');

        
    }

 
    public function edit(Entrance $entrance)
    {
        return view('admin.entrances.edit', compact('entrance'));
    }


    public function update(Request $request, Entrance $entrance)
    {
        $entrance->update($request->all());
        return redirect()->route('admin.entrances.index', $entrance)->with('info', 'La entrada se ha actualizado con exito!');
    }


    public function destroy(Entrance $entrance)
    {
        $entrance -> delete();
        return redirect()->route('admin.entrances.index', $entrance)->with('info', 'La Entrada se ha eliminado con exito!');

    }
}
