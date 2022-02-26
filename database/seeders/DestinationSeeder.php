<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Image;
use App\Models\Imagefull;
use App\Models\Imagethumb;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = Destination::factory(40)->create();

        foreach ($destinations as $destination) {
            Image::factory(1)->create([
                'imageable_id' => $destination->id,
                'imageable_type' => Destination::class
            ]);  
            Imagefull::factory(1)->create([
                'imageable_id' => $destination->id,
                'imageable_type' => Destination::class
            ]);

            Imagethumb::factory(1)->create([
                'imageable_id' => $destination->id,
                'imageable_type' => Destination::class
            ]);
        }
    }
}
