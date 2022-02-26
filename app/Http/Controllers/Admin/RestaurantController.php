<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.restaurants.index')->only('index');
        $this->middleware('can:admin.restaurants.create')->only('create','store');
        $this->middleware('can:admin.restaurants.edit')->only('edit','update');
        $this->middleware('can:admin.restaurants.destroy')->only('destroy');
    }
    
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('admin.restaurants.create');
    }

    public function store(Request $request)
    {
        $restaurant =  Restaurant::create($request->all());
        return redirect()->route('admin.restaurants.index', $restaurant)->with('info', 'El restaurant se ha creado con exito!');
    }

 
    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->update($request->all());
        return redirect()->route('admin.restaurants.index', $restaurant)->with('info', 'El restaurant se ha actualizado con exito!');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant -> delete();
        return redirect()->route('admin.restaurants.index')->with('info', 'El restaurant se ha eliminado con exito!');
    }
}
