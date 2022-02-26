<?php

namespace Database\Factories;

use App\Models\Lodge;
use Illuminate\Database\Eloquent\Factories\Factory;

class LodgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lodge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->text(10),
            'name' => $this->faker->text(10),
            'categoryRoom'=> $this->faker->text(50),
            'package'=> $this->faker->text(50),
            'typeRoom'=> $this->faker->text(50),         
            'contactName'=> $this->faker->text(50),         
            'contactEmail'=> $this->faker->text(50),  
            'contactPhone'=> $this->faker->text(50),          
        ];
    }
}
