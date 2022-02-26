<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion uno a muchos inversa
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    //Relacion muchos a muchos
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }

    // Relacion uno a muchos
    public function nations(){
        return $this->hasMany(Nation::class);
    }
    //Relacion uno a muchos inversa
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    // Relacion uno a muchos
    public function extension(){
        return $this->hasMany(Extension::class);
    }

    public function getNationFromDestination(){
        return Nation::where('id', $this->nation_id)->first()->name;
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

    // Relacion uno a muchos
    public function activity(){
        return $this->hasMany(Activity::class);
    }

    

}
