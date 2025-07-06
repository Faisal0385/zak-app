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
