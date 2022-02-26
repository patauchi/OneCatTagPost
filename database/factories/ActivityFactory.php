<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'description' => $this->faker->text(150),
            'status'=>$this->faker->randomElement([1,2]),
            'destination_id' => Destination::all()->random()->id
        ];
    }
}
