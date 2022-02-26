<?php

namespace Database\Factories;

use App\Models\Accomodation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccomodationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Accomodation::class;

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
            'category' => $this->faker->text(80),
            'typeHotel' => $this->faker->text(14),
            'categoryRoom'=> $this->faker->text(50),
            'typeRoom'=> $this->faker->text(50),         
            'price'=> $this->faker->text(50),         
            'lunch'=> $this->faker->text(50),     
            'contactName'=> $this->faker->text(50),         
            'contactEmail'=> $this->faker->text(50),  
            'contactPhone'=> $this->faker->text(50),  
        ];
    }
}
