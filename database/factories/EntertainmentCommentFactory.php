<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Entertainment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntertainmentComment>
 */
class EntertainmentCommentFactory extends Factory
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
            'entertainment_id' => Entertainment::all()->random()->id,
            'comment' => $this->faker->sentence,
        ];
    }
}
