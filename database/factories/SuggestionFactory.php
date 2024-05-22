<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suggestion>
 */
class SuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=['Suggestion 1','Suggestion 2','Suggestion 3','Suggestion 4','Suggestion 5','Suggestion 6','Suggestion 7','Suggestion 8','Suggestion 9','Suggestion 10','Suggestion 11','Suggestion 12',
        'Suggestion 13','Suggestion 14','Suggestion 15','Suggestion 16','Suggestion 17','Suggestion 18','Suggestion 19','Suggestion 20'];
        $location=['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane'];
        $type=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];        

        return [
            'title' => $title[rand(0,19)],
            'user_id' => User::all()->random()->id,
            'desc' => $this->faker->paragraph(2),
            'location' => $location[rand(0,9)],
            'type' => $type[rand(0,9)],
            'price' => rand(100,2500),
            'num' => $this->faker->numerify('06########'),
            'fb' => fake()->name(),
            'insta' => fake()->name(),
            'date' => $this->faker->dateTimeThisYear('+2 months'),
        ];
    }
}
