<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'userName'  => 'admin',
            'firstName' => 'Super',
            'lastName'  => 'Admin',
            'email'     => 'admin@mail.com',
            'password'  => '$2y$10$dI3OYeHl/lH4y7zoxD58/OaVXqDQLZ3bl5soCh1pnqvCy9IteYPni', // 123456
            'role'      => 'admin'
        ]);
        User::create([
            'userName'  => 'pengguna',
            'firstName' => 'Pengguna',
            'lastName'  => 'Satu',
            'email'     => 'pengguna@mail.com',
            'password'  => '$2y$10$dI3OYeHl/lH4y7zoxD58/OaVXqDQLZ3bl5soCh1pnqvCy9IteYPni', // 123456
            'role'      => 'pengguna'
        ]);
    }
}
