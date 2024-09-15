<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCourseProgress>
 */
class UserCourseProgressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // reference to user
            'course_id' => Course::factory(), // reference to course
            'module_id' => Module::factory(), // reference to module
            'completed' => $this->faker->boolean(), // randomly true or false
        ];
    }
}
