<?php

namespace Database\Factories;

use App\Models\Nation;
use App\Models\Destination;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;


class TourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'slogan'=> $this->faker->text(250),
            //'body'=> $this->faker->text(2000),

            'subtitle'=> $this->faker->text(120),
            'days'=> $this->faker->text(10),
            'shortprice'=> $this->faker->text(5),
            'fullprice'=> $this->faker->text(120),
            'calltoaction'=> $this->faker->text(80),
            'abstract'=> $this->faker->text(400),
            'include'=> $this->faker->text(700),
            'overview'=> $this->faker->text(1000),

            'status'=>$this->faker->randomElement([1,2]),

          //  'destination_id' => Destination::all()->random()->id,
          //  'nation_id' => Nation::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
