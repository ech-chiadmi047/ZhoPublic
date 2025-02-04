<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Suggestion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuggestionComment>
 */
class SuggestionCommentFactory extends Factory
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
            'suggestion_id' => Suggestion::all()->random()->id,
            'comment' => $this->faker->sentence,
        ];
    }
}
