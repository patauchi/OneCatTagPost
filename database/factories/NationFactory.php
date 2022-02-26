<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\Nation;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class NationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(10);
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'status'=>$this->faker->randomElement([1,2]),
            'title' => $name,
            'subtitle'=> $this->faker->text(70),
            'primgraph'=> $this->faker->text(340),
            'quotation'=> $this->faker->text(180),
            'abstract'=> $this->faker->text(700),
            'sidetitle'=> $this->faker->text(15),
            'sidebody'=> $this->faker->text(500),
            'journalsubtitle'=> $this->faker->text(100),
            'body'=> $this->faker->text(3000),
            
            
        ];
    }
}
