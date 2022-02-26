<?php

namespace Database\Factories;

use App\Models\Entrance;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntranceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entrance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->text(10),
            'sightseen' => $this->faker->text(10),
            'details' => $this->faker->text(80),
            'categoryPerson' => $this->faker->text(14),
            'price'=> $this->faker->text(50),            
        ];
    }
}
