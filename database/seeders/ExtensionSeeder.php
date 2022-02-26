<?php

namespace Database\Seeders;

use App\Models\Extension;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extensions = Extension::factory(50)->create();

        foreach ($extensions as $extension) {
            Image::factory(1)->create([
                'imageable_id' => $extension->id,
                'imageable_type' => Extension::class
            ]);  
            
        }
    }
}
