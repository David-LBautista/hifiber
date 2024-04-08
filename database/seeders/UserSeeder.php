<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::create([
            'name' => "admin hifiber",
            'email_verified_at' => now(),
            'email' => 'hifiber@hifiber.mx',
            'password' => bcrypt('password')
        ]);
    }
}
