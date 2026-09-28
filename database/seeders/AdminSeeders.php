<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name' => 'Super Admin',
            'username' => 'administrator',
            'password' => Hash::make('Admin123'),
            'role' => 'administrator',
            'status' => 'active',
            'created_at' => now(),
        ],[
            'name' => 'Teknisi Lapangan',
            'username' => 'teknisi',
            'password' => Hash::make('Teknisi123'),
            'role' => 'technician',
            'status' => 'active',
            'created_at' => now(),
        ]]);
    }
}
