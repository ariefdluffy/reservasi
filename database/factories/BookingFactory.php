<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'kode_booking' => $this->faker->randomNumber(3),
            // 'peserta_id' => $this->faker->numberBetween(2, 10),
            // 'kamar_id' => $this->faker->numberBetween(1, 0),
            // 'pelatihan_id' => $this->faker->numberBetween(1, 0),

            // 'check_in' => $this->faker->dateTime(now()),
            // 'check_out' => $this->faker->dateTimeBetween('+1 Week', '+2 Weeks'),
            // 'keterangan' => $this->faker->realText(100),
        ];
    }
}
