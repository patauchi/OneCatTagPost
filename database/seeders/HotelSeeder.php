<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Image;
use App\Models\Imagefull;
use App\Models\Imagethumb;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = Hotel::factory(50)->create();

        foreach ($hotels as $hotel) {
            Image::factory(1)->create([
                'imageable_id' => $hotel->id,
                'imageable_type' => Hotel::class
            ]);  
            Imagefull::factory(1)->create([
                'imageable_id' => $hotel->id,
                'imageable_type' => Hotel::class
            ]);

            Imagethumb::factory(1)->create([
                'imageable_id' => $hotel->id,
                'imageable_type' => Hotel::class
            ]);
        }
    }
}
