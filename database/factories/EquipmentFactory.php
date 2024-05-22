<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=['Equipment 1','Equipment 2','Equipment 3','Equipment 4','Equipment 5','Equipment 6','Equipment 7','Equipment 8','Equipment 9','Equipment 10','Equipment 11','Equipment 12',
        'Equipment 13','Equipment 14','Equipment 15','Equipment 16','Equipment 17','Equipment 18','Equipment 19','Equipment 20'];
        $location=['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane'];
        $type=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];        

        return [
            'title' => $title[rand(0,19)],
            'user_id' => User::all()->random()->id,
            'desc' => $this->faker->paragraph(2),
            'location' => $location[rand(0,9)],
            'type' => $type[rand(0,9)],
            'price' => rand(200,15000),
            'num' => $this->faker->numerify('06########'),
            'fb' => fake()->name(),
            'insta' => fake()->name(),
            'date' => $this->faker->dateTimeThisYear('+2 months'),
            'displaying' => '1',
        ];
    }
}
