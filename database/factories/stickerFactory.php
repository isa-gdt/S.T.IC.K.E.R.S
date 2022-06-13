<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sticker;

class stickerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Sticker::class;

    public function definition()
    {
        return [
            'idSti' => null,
            'idPack'=>$this->faker->numberBetween(1,15),
            'img' => $this->faker->name(),
        ];
    }
}
