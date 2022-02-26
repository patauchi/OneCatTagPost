<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Imagefull;
use App\Models\Imagethumb;
use App\Models\Imgtour;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = Tour::factory(50)->create();

        foreach ($tours as $tour) {
            Image::factory(1)->create([
                'imageable_id' => $tour->id,
                'imageable_type' => Tour::class
            ]);

            Imagefull::factory(1)->create([
                'imageable_id' => $tour->id,
                'imageable_type' => Tour::class
            ]);

            Imagethumb::factory(1)->create([
                'imageable_id' => $tour->id,
                'imageable_type' => Tour::class
            ]);

            $tour->nations()->attach([
                rand(1,3)
            ]);
            $tour->destinations()->attach([
                rand(1,4),
                rand(5,8)
            ]);
            
        }
    }
}
