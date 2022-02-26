<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Imagefull;
use App\Models\Imagethumb;
use App\Models\Nation;
use Illuminate\Database\Seeder;

class NationSeeder extends Seeder
{
    
    public function run()
    {
        $nations = Nation::factory(3)->create();

        foreach ($nations as $nation) {
            Image::factory(1)->create([
                'imageable_id' => $nation->id,
                'imageable_type' => Nation::class
            ]);
            Imagefull::factory(1)->create([
                'imageable_id' => $nation->id,
                'imageable_type' => Nation::class
            ]);

            Imagethumb::factory(1)->create([
                'imageable_id' => $nation->id,
                'imageable_type' => Nation::class
            ]);  
        }
    }
}
