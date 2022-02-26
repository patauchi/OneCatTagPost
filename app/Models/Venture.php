<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venture extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
 
    // Relacion uno a muchos
    public function hotels(){
        return $this->hasMany(Hotel::class);
    }
}
