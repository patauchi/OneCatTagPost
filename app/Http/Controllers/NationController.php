<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Nation;
use App\Models\Tour;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Support\Facades\URL;
use Spatie\SchemaOrg\Schema;


class NationController extends Controller
{
    public function show(Nation $nation){

        $tours = $nation->tours()->where('status',2)
                    ->latest('id')
                    ->get();


        $destinations = Destination::where('nation_id', $nation->id)
                        -> where('status',2)
                        -> get();
        
        $hotels = Hotel::where('nation_id', $nation->id)->take(12)->get();

        SEOMeta::setTitle($nation->name);
        SEOMeta::setDescription($nation->slogan);
        OpenGraph::setDescription($nation->slogan);
        OpenGraph::setTitle($nation->name);
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'article');
        //OpenGraph::addImage($nation->imgtour()->first()->url);
        //OpenGraph::addImage($nation->imgtour()->first()->url);

        
       return view('nations.show', compact('tours', 'nation','destinations','hotels'));
                        
    }
}
