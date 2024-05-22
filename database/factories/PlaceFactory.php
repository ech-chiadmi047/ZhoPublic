<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=['Place 1','Place 2','Place 3','Place 4','Place 5','Place 6','Place 7','Place 8','Place 9','Place 10','Place 11','Place 12',
        'Place 13','Place 14','Place 15','Place 16','Place 17','Place 18','Place 19','Place 20'];
        $location=['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane'];
        $type=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];        

        return [
            'title' => $title[rand(0,19)],
            'user_id' => User::all()->random()->id,
            'desc' => $this->faker->paragraph(2),
            'location' => $location[rand(0,9)],
            'type' => $type[rand(0,9)],
            'price' => rand(500,20000),
            'num' => $this->faker->numerify('06########'),
            'fb' => fake()->name(),
            'insta' => fake()->name(),
            'date' => $this->faker->dateTimeThisYear('+2 months'),
            'displaying' => '1',
        ];
    }
}
