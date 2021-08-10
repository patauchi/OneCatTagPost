<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

   


    protected $guarded = ['id','created_at','updated_at'];
    
    public function getRouteKeyName()
    {
        return "slug";
    }
    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    // Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relacion  1 a 1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
