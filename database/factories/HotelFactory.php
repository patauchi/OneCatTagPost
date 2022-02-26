<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Nation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$name = $this->faker->unique()->word(10);
        $name = $this->faker->text(10);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'subtitle'=> $this->faker->text(80),
            'body'=> $this->faker->text(3000),
            'primgraph'=> $this->faker->text(250),            
            'nation_id' => Nation::all()->random()->id,
            'status'=>$this->faker->randomElement([1,2]),
            'user_id' => User::all()->random()->id,
            'destination_id' => Destination::all()->random()->id,
        ];
    }
}
