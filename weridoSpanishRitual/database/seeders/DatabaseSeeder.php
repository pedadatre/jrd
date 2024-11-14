<?php

namespace Database\Seeders;

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
        User::factory()->create(["name" => "Mr Babu", 'surname' => null, "email" => "a@a.a", "password" => "a", 'birthday' => null, 'isAdmin' => "1"]);
        User::factory()->create(["name" => "Martiluski07", 'surname' => "Stinky that doesn't have PC", "email" => "e@e.e", "password" => "e", 'birthday' => null]);
    }
}
