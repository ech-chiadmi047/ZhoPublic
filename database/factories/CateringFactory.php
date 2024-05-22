<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catering>
 */
class CateringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=['Catering 1','Catering 2','Catering 3','Catering 4','Catering 5','Catering 6','Catering 7','Catering 8','Catering 9','Catering 10','Catering 11','Catering 12',
        'Catering 13','Catering 14','Catering 15','Catering 16','Catering 17','Catering 18','Catering 19','Catering 20'];
        $location=['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane'];
        $type=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];        

        return [
            'title' => $title[rand(0,19)],
            'user_id' => User::all()->random()->id,
            'desc' => $this->faker->paragraph(2),
            'location' => $location[rand(0,9)],
            'type' => $type[rand(0,9)],
            'price' => rand(2000,15000),
            'num' => $this->faker->numerify('06########'),
            'fb' => fake()->name(),
            'insta' => fake()->name(),
            'date' => $this->faker->dateTimeThisYear('+2 months'),
            'displaying' => '1',
        ];
    }
}
