<?php

namespace Database\Factories;

use App\Models\Filaments;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilamentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Filaments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filament_id' => $this->faker->realText($this->faker->numberBetween(10, 20)),
            'brand' => $this->faker->word,
            'color' => $this->faker->word,
            'numberofrolls' => $this->faker->numberBetween(10, 20),
            'status' => $this->faker->boolean
        ];
    }
}
