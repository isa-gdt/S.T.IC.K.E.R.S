<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class packFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idPack'=> null,
            'idUsu'=>$this->faker->numberBetween(1,15),
            'name'=> $this->faker->word(),
            'creation_date'=> $this->faker->date(),

        ];
    }
}
