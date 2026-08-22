<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'petugas@desa.test',
            ],
            [
                'name' => 'Petugas Desa',
                'password' => Hash::make('password123'),
                'role' => 'petugas',
            ]
        );
    }
}