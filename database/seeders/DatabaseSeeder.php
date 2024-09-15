<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
