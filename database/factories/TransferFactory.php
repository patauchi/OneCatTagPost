<?php

namespace Database\Factories;

use App\Models\Transfer;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transfer::class;

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
            'service'=> $this->faker->text(50),
            'details'=> $this->faker->text(50),
            'typeCar'=> $this->faker->text(50),
            'Price'=> $this->faker->text(50),
            'contactName'=> $this->faker->text(50),         
            'contactEmail'=> $this->faker->text(50),  
            'contactPhone'=> $this->faker->text(50), 
            'contactBank'=> $this->faker->text(50),         
        ];
    }
}
