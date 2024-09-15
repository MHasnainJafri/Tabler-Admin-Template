<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'video' => $this->faker->url(), // or a path to a random video file
            'description' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'module'), // random thumbnail
            'course_id' => Course::factory(), // reference to the course
        ];
    }
}
