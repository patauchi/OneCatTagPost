<?php

namespace Database\Factories;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Operator::class;

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
            'duration'=> $this->faker->text(50),
            'observation'=> $this->faker->text(50),         
            'contactName'=> $this->faker->text(50),         
            'contactEmail'=> $this->faker->text(50),  
            'contactPhone'=> $this->faker->text(50),          
        ];
    }
}
