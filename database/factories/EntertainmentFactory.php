<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entertainment>
 */
class EntertainmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=['Entertainment 1','Entertainment 2','Entertainment 3','Entertainment 4','Entertainment 5','Entertainment 6','Entertainment 7','Entertainment 8','Entertainment 9','Entertainment 10','Entertainment 11','Entertainment 12',
        'Entertainment 13','Entertainment 14','Entertainment 15','Entertainment 16','Entertainment 17','Entertainment 18','Entertainment 19','Entertainment 20'];
        $location=['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane'];
        $type=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];        

        return [
            'title' => $title[rand(0,19)],
            'user_id' => User::all()->random()->id,
            'desc' => $this->faker->paragraph(2),
            'location' => $location[rand(0,9)],
            'type' => $type[rand(0,9)],
            'price' => rand(600,15000),
            'num' => $this->faker->numerify('06########'),
            'fb' => fake()->name(),
            'insta' => fake()->name(),
            'date' => $this->faker->dateTimeThisYear('+2 months'),
            'displaying' => '1',
        ];
    }
}
