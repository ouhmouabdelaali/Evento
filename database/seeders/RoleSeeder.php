<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role; // Replace with your role model path

class RoleSeeder extends Seeder
{
    // public function run()
    // {
    //     Role::insert([
    //         ['name' => 'admin'],
    //         ['name' => 'organizers'],
    //         ['name' => 'participant'],
    //     ]);
    // }
    public function run()
    {
        Role::factory()->count(3)->create();  // Adjust the count as needed
    }
}
