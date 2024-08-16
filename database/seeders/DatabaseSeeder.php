<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Reservation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test',
            'last_name' => 'User',
            'phone' => '0123456789',
            'email' => 'test@example.com',
            'password' => '123456789'
        ]);

        User::factory()->create([
            'name' => 'Pomme',
            'last_name' => 'Poire',
            'phone' => '0123456589',
            'email' => 't@e.com',
            'password' => '123456789',
            'role' => "admin"
        ]);

        User::factory(10)->create();

        Contact::factory(20)->create();

        Reservation::factory(20)->create();
    }
}
