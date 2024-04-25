<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\user;
class DatabaseSeeder extends Seeder
{
     public function run(): void
    {
        User::create([
            'name' => 'Nazril',
            'email' => 'Nazril@gmail.com',
            'password' => bcrypt('nazril'),
            'role' => 'admin'

        ]);

        User::create([
            'name' => 'Petugas',
            'email' => 'Petugas@gmail.com',
            'password' => bcrypt('petugas'),
            'role' => 'petugas'

        ]);
    }
}