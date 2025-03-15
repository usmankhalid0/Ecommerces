<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \App\Models\Student ;
class CategaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categaryName' => $this->faker->name(),
            'amount' => $this->faker->randomDigit,
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'description'=>$this->faker->sentence ,
        ];
    }
}
