<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Nation;
use App\Models\Tour;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // public function index()
    // {
    //     $destinations = Destination::where('status',2)->latest('id')->paginate(50);

    //     return view('destinations.index', compact('destinations'));
    // }

    public function show(Nation $nation, Destination $destination){
        //return view('nations.destination');

        $this->authorize('published',$destination);
        $similares = Destination::where('nation_id', $destination->nation_id)
                            -> where('status', 2)
                            -> where('id','!=', $destination->id)
                            -> latest('id')
                            -> take(4)
                            -> get();

        $tours = $destination->tours()->where('status',2)
                        ->latest('id')
                        ->take(5)
                        ->get();
        
        $hotels = Hotel::where('destination_id', $destination->id)->get();


        return view('destinations.show', compact('destination', 'nation','similares','hotels','tours'));
    }

}
