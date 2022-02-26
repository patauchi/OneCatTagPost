<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Venture;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->text(20);
        return [
            'name' => $name,
            'hotel_id' => Hotel::all()->random()->id,
        ];
    }
}
