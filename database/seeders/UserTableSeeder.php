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
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'officialteam548@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'super',
                'status' => '1',
            ],

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'rgamejambi@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => '1',
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => '1',
            ],
        ]);
    }
}
