<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Module;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
use App\Models\UserCourseProgress;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
             'name' => 'admin',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' =>  Hash::make('password'),
        'remember_token' => Str::random(10),]
        );
        User::factory(10)->create();
        Role::findOrCreate('admin');
        Role::findOrCreate('user');
        $admin->assignRole('admin');
        foreach(User::where('id','>',1)->get() as $user){
            $user->assignRole('user');
        }



        // ==================================


        // Create categories
        $categories = Category::factory(5)->create(); // Create 5 categories

        // For each category, create courses
        $categories->each(function ($category) {
            $courses = Course::factory(3)->create(['category_id' => $category->id]);

            // For each course, create modules
            $courses->each(function ($course) {
                Module::factory(5)->create(['course_id' => $course->id]);

                // Optionally, create subscriptions for some users
                Subscription::factory(3)->create(['course_id' => $course->id]);

                // Optionally, create progress data for some users
                UserCourseProgress::factory(10)->create(['course_id' => $course->id]);
            });
        });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
