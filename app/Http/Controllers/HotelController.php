<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Venture;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::where('status',2)->latest('id')->paginate(50);

        return view('hotels.index', compact('hotels'));
    }


    public function show (Hotel $hotel){
        //$this->authorize('published',$tour);
        // $similares = Hotel::where('nation_id', $tour->nation_id)
        //                     -> where('status', 2)
        //                     -> where('id','!=', $tour->id)
        //                     -> latest('id')
        //                     -> take(4)
        //                     -> get();

        $ventures = Venture::where('hotel_id',$hotel->id)
                            ->get();

        //return $hotel;
        return view('hotels.show', compact('hotel','ventures'));
    }


}
