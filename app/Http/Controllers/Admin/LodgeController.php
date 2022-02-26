<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lodge;
use Illuminate\Http\Request;

class LodgeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.lodges.index')->only('index');
        $this->middleware('can:admin.lodges.create')->only('create','store');
        $this->middleware('can:admin.lodges.edit')->only('edit','update');
        $this->middleware('can:admin.lodges.destroy')->only('destroy');
    }
    public function index()
    {
        $lodges = Lodge::all();
        return view('admin.lodges.index', compact('lodges'));
    }

    public function create()
    {
        return view('admin.lodges.create');
    }

    public function store(Request $request)
    {
        $lodge =  Lodge::create($request->all());
        return redirect()->route('admin.lodges.index', $lodge)->with('info', 'El lodge se ha creado con exito!');
    }

 
    public function edit(Lodge $lodge)
    {
        return view('admin.lodges.edit', compact('lodge'));
    }

    public function update(Request $request, Lodge $lodge)
    {
        $lodge->update($request->all());
        return redirect()->route('admin.lodges.index', $lodge)->with('info', 'El lodge se ha actualizado con exito!');
    }

    public function destroy(Lodge $lodge)
    {
        $lodge -> delete();
        return redirect()->route('admin.lodges.index')->with('info', 'El lodge se ha eliminado con exito!');
    }
}
