<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagethumb extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    //Relacion Polimorfica
    public function imageable(){
        return $this->morphTo();
    }
}
