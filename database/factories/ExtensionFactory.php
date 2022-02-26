<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\Extension;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtensionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Extension::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'days' => $this->faker->text(10),
            'price' => $this->faker->text(10),
            'suplement' => $this->faker->text(5),
            'accomodation'=> $this->faker->text(200),
            'abstract'=> $this->faker->text(100),
            'img_url' => $this->faker->text(5),
            'status'=>$this->faker->randomElement([1,2]),

            'destination_id' => Destination::all()->random()->id
        ];
    }
}
