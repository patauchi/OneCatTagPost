<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationRequest;
use App\Models\Destination;
use App\Models\Nation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.destinations.index')->only('index');
        $this->middleware('can:admin.destinations.create')->only('create','store');
        $this->middleware('can:admin.destinations.edit')->only('edit','update');
        $this->middleware('can:admin.destinations.destroy')->only('destroy');
    }
    
    public function index()
    {
        $destinations = Destination::all();
        //$nation = Nation::where('id', $destinations->find(1)->nation_id)->first()->name;
        //return $nation;
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        $nations = Nation::all()->pluck('name', 'id');

        return view('admin.destinations.create', compact('nations'));
    }


    public function store(DestinationRequest $request)
    {
                
         $destination = Destination::create($request->all());

         if($request->file('file')){
            Storage::put('Public/destinations',$request->file('file'));
            $url2 = Storage::put('destinations',$request->file('file'));
            $destination->image()->create([
                'url'=> $url2
            ]);
         }
         if($request->file('filethumb')){
            Storage::put('Public/destinations',$request->file('filethumb'));
            $url2 = Storage::put('destinations',$request->file('filethumb'));
            $destination->imagethumb()->create([
                'url'=> $url2
            ]);
         }
         if($request->file('filefull')){
            Storage::put('Public/destinations',$request->file('filefull'));
            $url2 = Storage::put('destinations',$request->file('filefull'));
            $destination->imagefull()->create([
                'url'=> $url2
            ]);
         }
         

        $destination->save();

         return redirect()->route('admin.destinations.index', $destination)->with('info', 'La categoria se ha creado con exito!');
    }


    public function show(Destination $destination)
    {
        return view('admin.destinations.show', compact('destination'));
    }

    public function edit(Destination $destination)
    {
       // $this->authorize('author',$destination);
       $nations = Nation::all()->pluck('name', 'id');;
        return view('admin.destinations.edit', compact('destination', 'nations'));
    }

    
    public function update(DestinationRequest $request, Destination $destination)
    {
        $destination->update($request->all());

        if($request->file('file')) {
            Storage::put('Public/destinations', $request->file('file'));
            $url = Storage::put('destinations', $request->file('file'));

            if($destination->image){
                Storage::delete('Public/'. $destination->image->url);

                $destination->image->update([
                    'url' => $url
                ]);
            }else{
                $destination->image()->create([
                    'url'=> $url
                ]);

            }
        }
        if($request->file('filethumb')) {
            Storage::put('Public/destinations', $request->file('filethumb'));
            $url = Storage::put('destinations', $request->file('filethumb'));

            if($destination->imagethumb){
                Storage::delete('Public/'. $destination->imagethumb->url);

                $destination->imagethumb->update([
                    'url' => $url
                ]);
            }else{
                $destination->imagethumb()->create([
                    'url'=> $url
                ]);

            }
        }
        if($request->file('filefull')) {
            Storage::put('Public/destinations', $request->file('filefull'));
            $url = Storage::put('destinations', $request->file('filefull'));

            if($destination->imagefull){
                Storage::delete('Public/'. $destination->imagefull->url);

                $destination->imagefull->update([
                    'url' => $url
                ]);
            }else{
                $destination->imagefull()->create([
                    'url'=> $url
                ]);

            }
        }

        $destination->save();

        return redirect()->route('admin.destinations.index', $destination)->with('info', 'La categoria se ha actualizado con exito!');
    }


    public function destroy(Destination $destination)
    {
        $destination -> delete();
        return redirect()->route('admin.destinations.index')->with('info', 'La categoria se ha eliminado con exito!');
    }



}
