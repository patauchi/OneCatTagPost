<?php

namespace Database\Factories;

use App\Models\Imagethumb;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagethumbFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagethumb::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'url' => 'posts/'. $this->faker->image('public/storage/posts', 640, 480, null, false)
        ];
    }
}
