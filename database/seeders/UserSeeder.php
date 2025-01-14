<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create multiple users (for example, 10 users)
        User::factory(20)->create();  // This will generate 10 random users using the factory
    }
}
