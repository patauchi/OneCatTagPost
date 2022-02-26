<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

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
            'details'=> $this->faker->text(50),
            'price'=> $this->faker->text(50),
            'contactName'=> $this->faker->text(50),         
            'contactEmail'=> $this->faker->text(50),  
            'contactPhone'=> $this->faker->text(50),          
        ];
    }
}
