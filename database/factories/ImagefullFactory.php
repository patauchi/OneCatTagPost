<?php

namespace Database\Factories;

use App\Models\Imagefull;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagefullFactory extends Factory
{

    protected $model = Imagefull::class;

    public function definition()
    {
        return [
            //
            'url' => 'posts/'. $this->faker->image('public/storage/posts', 1950, 550, null, false)
        ];
    }
}
