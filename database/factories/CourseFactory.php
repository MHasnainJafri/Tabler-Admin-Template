<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'description' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'course'), // random thumbnail
            'user_id' => User::factory(), // reference to user who created the course
            'category_id' => Category::factory(), // reference to category
        ];
    }
}
