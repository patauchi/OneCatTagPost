<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muchos inversa
    public function destination(){
        return $this->belongsTo(Destination::class);
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

    //public function 
    public function getDestinations(){
        return Destination::where('id', $this->destination_id)->first()->name;
    }
    public function getNation(){
        $id_nation = Destination::where('id', $this->destination_id)->first()->nation_id;
       return Nation::where('id', $id_nation)->first()->name;
    }
}
