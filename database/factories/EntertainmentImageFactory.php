<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entertainment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntertainmentImage>
 */
class EntertainmentImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $id = 1; 
        $image=['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg'];
        return [
            'entertainment_id' => $id++,
            'image' => $image[rand(0,5)],
        ];
    }
}
