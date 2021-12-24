<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>$this->faker->name(),
           'price'=>10000,
           'description'=>$this->faker->sentence(),
           'categorie_id'=>1
        ];
    }
}
