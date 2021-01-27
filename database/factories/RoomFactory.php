<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(5),
            'image_url' => $this->faker->imageUrl(),
            'price_per_night' => $this->faker->randomElement([40, 55, 80, 120, 200, 400]),
            'bed_size' => $this->faker->randomElement(['King', 'Queen', 'Diplomat']),
            'ac_included' => $this->faker->boolean(),
            'size_in_ft' => $this->faker->numberBetween(10, 30),
            'max_guests' => $this->faker->numberBetween(2, 12),
            'smoking_allowed' => $this->faker->boolean(),
            'pool_included' => $this->faker->boolean(),
        ];
    }
}
