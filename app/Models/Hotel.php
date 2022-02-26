<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    // Relacion uno a muchos
    public function nation(){
        return $this->hasMany(Nation::class);
    }
    // Relacion uno a muchos
    public function destination(){
        return $this->hasMany(Destination::class);
    }

    //Relacion uno a muchos inversa
    public function ventures(){
        return $this->belongsToMany(Venture::class);
    }

    public function getDestination(){
        return Destination::where('id', $this->destination_id)->first()->name;
    }

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

}
