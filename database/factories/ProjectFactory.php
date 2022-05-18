<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(1),
            'mitra' => $this->faker->company(),
            'lokasi' => $this->faker->city(),
            'tahun' => $this->faker->numberBetween($min = 2018, $max = 2022),
        ];
    }
}
