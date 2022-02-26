<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return "slug";
    }
    // Relacion muchos a muchos
    public function destinations(){
        return $this->belongsToMany(Destination::class);
    }
    
    public function nations(){
        return $this->belongsToMany(Nation::class);
    }

    //relacion  1 a 1 polimorfica
    // public function imgtour(){
    //     return $this->morphOne(Imgtour::class, 'imageable');
    // }

    //relacion  1 a 1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //relacion  1 a 1 polimorfica
    public function imagethumb(){
        return $this->morphOne(Imagethumb::class, 'imageable');
    }

    //relacion  1 a 1 polimorfica
    public function imagefull(){
        return $this->morphOne(Imagefull::class, 'imageable');
    }


    //Relacion uno a muchos inversa
    public function plans(){
        return $this->belongsTo(Plan::class);
    }

    public function getNations(){
        return Nation::where('id', $this->nation_id)->first()->name;
    }
    // public function getDestinations(){
    //     return Nation::where('id', $this->nation_id)->first()->name;
    // }




}
