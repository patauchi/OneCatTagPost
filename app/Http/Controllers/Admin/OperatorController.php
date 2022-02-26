<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.operators.index')->only('index');
        $this->middleware('can:admin.operators.create')->only('create','store');
        $this->middleware('can:admin.operators.edit')->only('edit','update');
        $this->middleware('can:admin.operators.destroy')->only('destroy');
    }
    
    public function index()
    {
        $operators = Operator::all();
        return view('admin.operators.index', compact('operators'));
    }

    public function create()
    {
        return view('admin.operators.create');
    }

    public function store(Request $request)
    {
        $operator =  Operator::create($request->all());
        return redirect()->route('admin.operators.index', $operator)->with('info', 'El operator se ha creado con exito!');
    }

 
    public function edit(Operator $operator)
    {
        return view('admin.operators.edit', compact('operator'));
    }

    public function update(Request $request, Operator $operator)
    {
        $operator->update($request->all());
        return redirect()->route('admin.operators.index', $operator)->with('info', 'El operator se ha actualizado con exito!');
    }

    public function destroy(Operator $operator)
    {
        $operator -> delete();
        return redirect()->route('admin.operators.index')->with('info', 'El operator se ha eliminado con exito!');
    }
}
