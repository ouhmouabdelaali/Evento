<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call all registered seeders
        $this->call([
            UserSeeder::class, 
            TicketSeeder::class,
            RoleSeeder::class,
            ReservationTicketSeeder::class,
            EventSeeder::class,
            CategorySeeder::class,
            AddressSeeder::class,
            
        ]);
    }
}
