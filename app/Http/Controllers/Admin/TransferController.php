<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.transfers.index')->only('index');
        $this->middleware('can:admin.transfers.create')->only('create','store');
        $this->middleware('can:admin.transfers.edit')->only('edit','update');
        $this->middleware('can:admin.transfers.destroy')->only('destroy');
    }
    
    public function index()
    {
        $transfers = Transfer::all();
        return view('admin.transfers.index', compact('transfers'));
    }

    public function create()
    {
        return view('admin.transfers.create');
    }

    public function store(Request $request)
    {
        $transfer =  Transfer::create($request->all());
        return redirect()->route('admin.transfers.index', $transfer)->with('info', 'El transfer se ha creado con exito!');
    }

 
    public function edit(Transfer $transfer)
    {
        return view('admin.transfers.edit', compact('transfer'));
    }

    public function update(Request $request, Transfer $transfer)
    {
        $transfer->update($request->all());
        return redirect()->route('admin.transfers.index', $transfer)->with('info', 'El transfer se ha actualizado con exito!');
    }

    public function destroy(Transfer $transfer)
    {
        $transfer -> delete();
        return redirect()->route('admin.transfers.index')->with('info', 'El transfer se ha eliminado con exito!');
    }
}
