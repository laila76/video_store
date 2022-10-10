<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake()->sentence(),
            'description' => fake()->paragraph(200),
            'nationality' =>fake()->country(),
            'actors'=> fake()->name(),
            'year_created'=> fake()->year(),
            'url_img' => fake()->imageUrl(640, 480, 'animals', true),
            'created_at' => now()
            
           
    
        ];
    }
}
