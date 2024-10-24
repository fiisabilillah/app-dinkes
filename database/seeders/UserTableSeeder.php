<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('users')->insert([
            [
                'email' => 'officialteam548@gmail.com',
                'nama' => 'Super Admin',
                'password' => Hash::make('123'),
                'role' => 'super',
                'status' => 1,
                'username' => 'superadmin',
            ],
            [
                'email' => 'rgamejambi@gmail.com',
                'nama' => 'Admin',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 1,
                'username' => 'admin',
            ],
            [
                'email' => 'user@gmail.com',
                'nama' => 'User',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => 1,
                'username' => 'user',// Tambahkan nilai NIK
            ],
        ]);
    }
}
