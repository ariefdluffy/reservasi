<?php

namespace Database\Factories;

use App\Models\Participant;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'peserta_id' => Participant::factory(),
            'pelatihan_id' => Training::factory(),
            'nama_peserta' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }
}
