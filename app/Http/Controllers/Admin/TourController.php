<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Models\Destination;
use App\Models\Nation;
use App\Models\Plan;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.tours.index')->only('index');
        $this->middleware('can:admin.tours.create')->only('create', 'store');
        $this->middleware('can:admin.tours.edit')->only('edit', 'update');
        $this->middleware('can:admin.tours.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.tours.index');
    }


    public function create()
    {
        $nations = Nation::all();
        $destinations = Destination::all();
        $plans = [];
        return view('admin.tours.create', compact('nations', 'destinations','plans'));
    }


    public function store(TourRequest $request)
    {
        //  return $request;

        $tour =  Tour::create($request->all());

        //  return $tour;

        if ($request->file('file')) {
            Storage::put('Public/tours', $request->file('file'));
            $url2 = Storage::put('tours', $request->file('file'));
            $tour->image()->create([
                'url' => $url2
            ]);
        }

        if ($request->file('filethumb')) {
            Storage::put('Public/tours', $request->file('filethumb'));
            $url2 = Storage::put('tours', $request->file('filethumb'));
            $tour->imagethumb()->create([
                'url' => $url2
            ]);
        }
        if ($request->file('filefull')) {
            Storage::put('Public/tours', $request->file('filefull'));
            $url2 = Storage::put('tours', $request->file('filefull'));
            $tour->imagefull()->create([
                'url' => $url2
            ]);
        }


        $tour->save();

        if (isset($request->nations)) {
            $tour->nations()->sync($request->nations, false);
        } else {
            $tour->nations()->sync(array());
        }

        // Relaciones Muchos a Muchos
        if (isset($request->destinations)) {
            $tour->destinations()->sync($request->destinations, false);
        } else {
            $tour->destinations()->sync(array());
        }


        // // return $posts;
        return redirect()->route('admin.tours.index', $tour)->with('info', 'El tour se ha creado con exito');
    }


    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }


    public function edit(Tour $tour)
    {
        $this->authorize('author', $tour);

        $nations = Nation::all();
        $destinations = Destination::all();
        $plans = Plan::where('tour_id',$tour->id)->get();
        return view('admin.tours.edit', compact('tour', 'nations', 'destinations','plans'));
    }


    public function update(TourRequest $request, Tour $tour)
    {
        $this->authorize('author', $tour);
        $tour->update($request->all());


        if ($request->file('file')) {
            Storage::put('Public/tours', $request->file('file'));
            $url = Storage::put('tours', $request->file('file'));

            if ($tour->image) {
                Storage::delete('Public/' . $tour->image->url);

                $tour->image->update([
                    'url' => $url
                ]);
            } else {
                $tour->image()->create([
                    'url' => $url
                ]);
            }
        }
        if ($request->file('filethumb')) {
            Storage::put('Public/tours', $request->file('filethumb'));
            $url = Storage::put('tours', $request->file('filethumb'));

            if ($tour->imagethumb) {
                Storage::delete('Public/' . $tour->imagethumb->url);

                $tour->imagethumb->update([
                    'url' => $url
                ]);
            } else {
                $tour->imagethumb()->create([
                    'url' => $url
                ]);
            }
        }
        if ($request->file('filefull')) {
            Storage::put('Public/tours', $request->file('filefull'));
            $url = Storage::put('tours', $request->file('filefull'));

            if ($tour->imagefull) {
                Storage::delete('Public/' . $tour->imagefull->url);

                $tour->imagefull->update([
                    'url' => $url
                ]);
            } else {
                $tour->imagefull()->create([
                    'url' => $url
                ]);
            }
        }


        $tour->save();
        if (isset($request->nations)) {
            $tour->nations()->sync($request->nations);
        } else {
            $tour->nations()->sync(array());
        }

        if (isset($request->destinations)) {
            $tour->destinations()->sync($request->destinations);
        } else {
            $tour->destinations()->sync(array());
        }


        return redirect()->route('admin.tours.edit', $tour)->with('info', 'El post se actualizó con exito');
    }


    public function destroy(Tour $tour)
    {
        $this->authorize('author', $tour);
        $tour->delete();

        return redirect()->route('admin.tours.index', $tour)->with('info', 'El tour se ha eliminado con exito!');
    }

    public function addItinerary(Request $request){
        $data = $request->validate([            
            'innerview' => 'required',
            'destination' => 'required',
            'day' => 'required',            
            'itinerary' => 'required',
            'tour' => ['required', 'numeric']
        ]);

       
        $tour = Tour::findOrFail($data['tour']);
        $plan = new Plan();
        $plan->innerview = $data['innerview'];
        $plan->day = $data['day'];
        $plan->destination = $data['destination'];
        $plan->itinerary = $data['itinerary'];
        $plan->tour_id = $data['tour'];
        $plan->save();
        
        return redirect()->route('admin.tours.edit', $tour)->with('info', 'El itinerio se ha agregado con exito!');
    }

    public function deleteItinerary(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('admin.tours.index')->with('info', 'El itinerio se ha eliminado!');

    }

    public function editItinerary(Plan $plan, Tour $tour)
    {
        return view('admin.tours.editplans', compact('plan','tour'));

    }
    public function updateItinerary(Request $request, Plan $plan)
    {   
        $plan->update($request->all());
        $tour = Tour::find($plan->tour_id);
        return redirect()->route('admin.tours.edit', $tour)->with('info', 'El lodge se ha actualizado con exito!');
    }


}
