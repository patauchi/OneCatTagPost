<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion muchos a muchos
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }

    //Relacion uno a muchos inversa
    public function destinations(){
        return $this->belongsTo(Destination::class);
    }
     //Relacion uno a muchos inversa
     public function hotel(){
        return $this->belongsTo(Hotel::class);
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
