<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use App\Models\Tour;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Facades\URL;

class PageController extends Controller
{
    public function index(){

      SEOMeta::setTitle('Home');
      SEOMeta::setDescription('This is my page description');
      SEOMeta::setCanonical(URL::current());

      OpenGraph::setDescription('This is my page description');
      OpenGraph::setTitle('Home');
      OpenGraph::setUrl(URL::current());
      OpenGraph::addProperty('type', 'articles');

      TwitterCard::setTitle('Homepage');
      TwitterCard::setSite('@LuizVinicius73');

      JsonLd::setTitle('Homepage');
      JsonLd::setDescription('This is my page description');
      JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        $nations = Nation::where('status',2)->get();        
        $tours = Tour::where('status',2)->take(5)->get();

        return view('page.index',compact('nations','tours'));
     }
}
