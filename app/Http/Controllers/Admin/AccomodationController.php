<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller

{
    public function __construct()
    {
        $this->middleware('can:admin.accomodations.index')->only('index');
        $this->middleware('can:admin.accomodations.create')->only('create','store');
        $this->middleware('can:admin.accomodations.edit')->only('edit','update');
        $this->middleware('can:admin.accomodations.destroy')->only('destroy');
    }

    public function index()
    {
        $accomodations = Accomodation::all();
        return view('admin.accomodations.index', compact('accomodations'));
    }

    public function create()
    {
        return view('admin.accomodations.create');
    }

    public function store(Request $request)
    {
        $accomodation =  Accomodation::create($request->all());
        return redirect()->route('admin.accomodations.index', $accomodation)->with('info', 'El hotel se ha creado con exito!');
    }

 
    public function edit(Accomodation $accomodation)
    {
        return view('admin.accomodations.edit', compact('accomodation'));
    }

    public function update(Request $request, Accomodation $accomodation)
    {
        $accomodation->update($request->all());
        return redirect()->route('admin.accomodations.index', $accomodation)->with('info', 'El accomodation se ha actualizado con exito!');
    }

    public function destroy(Accomodation $accomodation)
    {
        $accomodation -> delete();
        return redirect()->route('admin.accomodations.index', $accomodation)->with('info', 'El accomodation se ha eliminado con exito!');
    }
}
