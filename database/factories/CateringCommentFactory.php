<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Catering;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CateringComment>
 */
class CateringCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'catering_id' => Catering::all()->random()->id,
            'comment' => $this->faker->sentence,
        ];
    }
}
