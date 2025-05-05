<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Matthew',
            'email' => 'matt@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'don',
            'email' => 'don@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123'),
            'is_tugas' => false,

        ]);
        User::create([
            'nama' => 'fon',
            'email' => 'fon@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123'),
            'is_tugas' => false,
        ]);
    }
}