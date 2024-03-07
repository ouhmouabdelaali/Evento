<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Replace with your user model path
use Faker\Factory as FakerFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 50; $i++) { 
    //         User::create([
    //             'name' => $faker->name,
    //             'email' => $faker->unique()->safeEmail,
    //             'password' => bcrypt('password'), // Replace with your desired password generation logic
    //             'role_id' => rand(1, 3), // Assuming you have 3 roles with IDs 1 to 3
    //         ]);
    //     }
    // }
    
    public function run()
    {
       User::factory()->count(50)->create(); 
    }
}
