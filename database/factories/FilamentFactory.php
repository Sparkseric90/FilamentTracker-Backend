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
            'brands' => $this->faker->name(),
            'color' => $this->faker->colorName(),
            'numberofrolls' => $this->faker->randomDigit(),
        ];
    }
}
