<?php

namespace Database\Factories;

use App\Models\Filament;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Filament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word,
            'color' => $this->faker->word,
            'numberofrolls' => $this->faker->numberBetween(10, 20),
            'status' => $this->faker->boolean
        ];
    }
}
