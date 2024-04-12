<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_asrama' => $this->faker->randomLetter(),
            'nomor_kamar' => $this->faker->randomNumber(),
            'status' => 'tersedia',
            'keterangan' => $this->faker->randomLetter(),
        ];
    }
}
