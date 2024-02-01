<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patien;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin E-Klinik',
            'email' => 'admin@gmail.com',
            'telephone' => '081229473829',
            'address' => 'Address Admin',
            'password' => Hash::make('admin'),
            'level' => 'admin'
        ]);
        $patient = User::create([
            'name' => 'User E-Klinik',
            'email' => 'user@gmail.com',
            'telephone' => '081229473819',
            'address' => 'Address User',
            'password' => Hash::make('user'),
            'level' => 'user'
        ]);
        Patien::create([
            'user_id' => $patient->id
        ]);
    }
}
