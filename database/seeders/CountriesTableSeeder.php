<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $countries = [
            ['name' => 'United Arab Emirates', 'slug' => 'united-arab-emirates'],
            ['name' => 'United States', 'slug' => 'united-states'],
            ['name' => 'United Kingdom', 'slug' => 'united-kingdom'],
            ['name' => 'Canada', 'slug' => 'canada'],
            ['name' => 'Australia', 'slug' => 'australia'],
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['name'],
                'slug' => $country['slug'],
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
