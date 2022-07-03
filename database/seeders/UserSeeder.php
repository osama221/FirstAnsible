<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@zinad.com',
            'name' => 'admin',
            'password' => '$2y$10$ncuthCfJcj5L9bB7BaS8Oe6BRoHiEKzt1sQBiUd1WuT/X.4lK2j3y',
        ]);
    }
}
