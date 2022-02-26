<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'innerview' => $this->faker->text(10),
            'destination' => $this->faker->text(10),
            'day' => $this->faker->text(5),
            'itinerary'=> $this->faker->text(200),
            'tour_id' => Tour::all()->random()->id
        ];
    }
}
