<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Nation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.hotels.index')->only('index');
        $this->middleware('can:admin.hotels.create')->only('create','store');
        $this->middleware('can:admin.hotels.edit')->only('edit','update');
        $this->middleware('can:admin.hotels.destroy')->only('destroy');
    }
    
    public function index()
    {
        $hotels = Hotel::all();
        $destinations = Destination::all();
        $nations = Nation::all();
        return view('admin.hotels.index', compact('hotels','destinations','nations'));
    }

    public function create()
    {
        $destinations = Destination::pluck('name','id');
        $nations = Nation::all()->pluck('name', 'id');
        return view('admin.hotels.create', compact('destinations','nations'));
    }

 
    public function store(HotelRequest $request)
    { 

       // return $request;
        $hotel = Hotel::create($request->all());

        if($request->file('file')){
            Storage::put('Public/hotels',$request->file('file'));
            $url2 = Storage::put('hotels',$request->file('file'));
            $hotel->image()->create([
                'url'=> $url2
            ]);
         }

         if($request->file('filethumb')){
            Storage::put('Public/hotels',$request->file('filethumb'));
            $url2 = Storage::put('hotels',$request->file('filethumb'));
            $hotel->imagethumb()->create([
                'url'=> $url2
            ]);
         }
         if($request->file('filefull')){
            Storage::put('Public/hotels',$request->file('filefull'));
            $url2 = Storage::put('hotels',$request->file('filefull'));
            $hotel->imagefull()->create([
                'url'=> $url2
            ]);
         }

        $hotel->save();


        return redirect()->route('admin.hotels.index',$hotel)->with('info', 'El hotel se ha creado con exito!');

    }

    public function edit(Hotel $hotel)
    {
        $destinations = Destination::pluck('name','id');
        $nations = Nation::all()->pluck('name', 'id');
        return view('admin.hotels.edit', compact('hotel','destinations','nations'));  //
    }

 
    public function update(HotelRequest $request, Hotel $hotel)
    {
       
        //$this->authorize('author',$tour);
                           
        $hotel->update($request->all());           

        if($request->file('file')) {
            Storage::put('Public/hotels', $request->file('file'));
            $url = Storage::put('hotels', $request->file('file'));

            if($hotel->image){
                Storage::delete('Public/'. $hotel->image->url);

                $hotel->image->update([
                    'url' => $url
                ]);
            }else{
                $hotel->image()->create([
                    'url'=> $url
                ]);

            }
        }

        if($request->file('filethumb')) {
            Storage::put('Public/hotels', $request->file('filethumb'));
            $url = Storage::put('hotels', $request->file('filethumb'));

            if($hotel->imagethumb){
                Storage::delete('Public/'. $hotel->imagethumb->url);

                $hotel->imagethumb->update([
                    'url' => $url
                ]);
            }else{
                $hotel->imagethumb()->create([
                    'url'=> $url
                ]);

            }
        }
        if($request->file('filefull')) {
            Storage::put('Public/hotels', $request->file('filefull'));
            $url = Storage::put('hotels', $request->file('filefull'));

            if($hotel->imagefull){
                Storage::delete('Public/'. $hotel->imagefull->url);

                $hotel->imagefull->update([
                    'url' => $url
                ]);
            }else{
                $hotel->imagefull()->create([
                    'url'=> $url
                ]);

            }
        }

        $hotel->save();

        return redirect()->route('admin.hotels.index', $hotel)->with('info', 'el hotel se ha actualizado con exito!');

    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('admin.hotels.index', $hotel)->with('info', 'El hotel se ha eliminado con exito!');

    }
}
