<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catering;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CateringImage>
 */
class CateringImageFactory extends Factory
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
            'catering_id' => $id++ ,
            'image' => $image[rand(0,5)],
        ];
    }
}
