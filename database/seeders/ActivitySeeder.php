<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Image;
use App\Models\Imagefull;
use App\Models\Imagethumb;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    
    public function run()
    {
        $activities = Activity::factory(200)->create();

        foreach ($activities as $activity) {
            Image::factory(1)->create([
                'imageable_id' => $activity->id,
                'imageable_type' => Activity::class
            ]);
            Imagefull::factory(1)->create([
                'imageable_id' => $activity->id,
                'imageable_type' => Activity::class
            ]);

            Imagethumb::factory(1)->create([
                'imageable_id' => $activity->id,
                'imageable_type' => Activity::class
            ]);  
        }
    }
}
