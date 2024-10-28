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
        User::factory()->create(["name" => "Mr Babu", 'surname' => null, "email" => "a@a.a", "password" => "a", 'birthday' => null, 'isAdmin' => "is"]);
        User::factory()->create(["name" => "Martiluski07", 'surname' => "Stinky with no PC", "email" => "b@b.b", "password" => "b", 'birthday' => null, 'isAdmin' => "isNot"]);
    }
}
