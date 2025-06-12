<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $states = DB::table('states')->pluck('id', 'slug');

        $cities = [
            ['name' => 'Dhaka City', 'slug' => 'dhaka-city', 'state_slug' => 'dhaka'],
            ['name' => 'Chattogram City', 'slug' => 'chattogram-city', 'state_slug' => 'chattogram'],
            ['name' => 'Mumbai', 'slug' => 'mumbai', 'state_slug' => 'maharashtra'],
            ['name' => 'Lahore', 'slug' => 'lahore', 'state_slug' => 'punjab'],
            ['name' => 'Los Angeles', 'slug' => 'los-angeles', 'state_slug' => 'california'],
            ['name' => 'Toronto', 'slug' => 'toronto', 'state_slug' => 'ontario'],
        ];

        foreach ($cities as $city) {
            if (isset($states[$city['state_slug']])) {
                DB::table('cities')->insert([
                    'name' => $city['name'],
                    'slug' => $city['slug'],
                    'state_id' => $states[$city['state_slug']],
                    'status' => 'active',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
