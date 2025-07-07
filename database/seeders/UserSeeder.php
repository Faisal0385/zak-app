<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Zak Realty',
            'email' => 'admin@app.com',
            'password' => Hash::make('11111111'),
            'phone' => '01700000000',
            'address' => 'Chattogram, Bangladesh',
            'status' => '1',
            'image' => null,
            'role' => 'admin',
        ]);
    }
}
