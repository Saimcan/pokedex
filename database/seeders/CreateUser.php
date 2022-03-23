<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test123'),
            'remember_token' => Str::random(10)
        ]);
    }
}
