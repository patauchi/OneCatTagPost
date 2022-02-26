<?php

namespace Database\Seeders;

use App\Models\Accomodation;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Nation;
use App\Models\Destination;
use App\Models\Entrance;
use App\Models\Extension;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Lodge;
use App\Models\Operator;
use App\Models\Page;
use App\Models\Plan;
use App\Models\Restaurant;
use App\Models\Tag;
use App\Models\Transfer;
use App\Models\Transport;
use App\Models\Venture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Storage::disk('public')->deleteDirectory('posts', 0777);
        Storage::disk('public')->makeDirectory('posts', 0777);

        Storage::disk('public')->deleteDirectory('tours', 0777);
        Storage::disk('public')->makeDirectory('tours', 0777);

        Storage::disk('public')->deleteDirectory('extensions', 0777);
        Storage::disk('public')->makeDirectory('extensions', 0777);

        Storage::disk('public')->deleteDirectory('nations', 0777);
        Storage::disk('public')->makeDirectory('nations', 0777);

        Storage::disk('public')->deleteDirectory('destinations', 0777);
        Storage::disk('public')->makeDirectory('destinations', 0777);

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
       
        $this->call(NationSeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(TourSeeder::class);
        $this->call(HotelSeeder::class);

       Venture::factory(300)->create();
      
       Plan::factory(800)->create();

       $this->call(ExtensionSeeder::class);


       Entrance::factory(80)->create();
       Guide::factory(80)->create();
       Accomodation::factory(80)->create();
       Lodge::factory(80)->create();
       Restaurant::factory(80)->create();
       Operator::factory(80)->create();
       Transfer::factory(80)->create();
       $this->call(ActivitySeeder::class);


    }
}
