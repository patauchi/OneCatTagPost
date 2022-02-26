<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Destination;
use App\Models\Extension;
use App\Models\Plan;
use App\Models\Tour;
use Illuminate\Http\Request;


use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use Spatie\SchemaOrg\Schema;


class TourController extends Controller
{

    public function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical(URL::current());

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Homepage');
        TwitterCard::setSite('@LuizVinicius73');


        $tours = Tour::where('status', 2)->latest('id')->paginate(50);

        return view('tours.index', compact('tours'));
    }


    public function show(Tour $tour)
    {


        $this->authorize('published', $tour);

        $tour = Tour::find($tour->id);
        $destinations = $tour->destinations->pluck('name', 'id');
        $Ids = $tour->destinations->pluck('id')->toArray();

        $simp_tmp = array();        
           foreach ($Ids as $id) {
            $simi_tmp = Destination::with('tours')->find($id);  
              
            foreach ($simi_tmp->tours as $tour) {
                  $simp_tmp[] = $tour;
            }
           }

        $templ_tmp = array_unique($simp_tmp);
        $similares =  Arr::random($templ_tmp, 8);
        $plans = Plan::where('tour_id', $tour->id)->get();
        $extensions = Extension::where('destination_id', $Ids)->get();
        $activities = Activity::where('destination_id', $Ids)->get();


        SEOMeta::setTitle($tour->name);
        SEOMeta::setDescription($tour->slogan);
        OpenGraph::setDescription($tour->slogan);
        OpenGraph::setTitle($tour->name);
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'article');
        // OpenGraph::addImage($tour->imgtour()->first()->url);


        return view('tours.show', compact('tour', 'plans', 'extensions', 'similares','activities'));
    }
}
