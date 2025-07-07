<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // You may use DB::table('countries')->where('name', 'Bangladesh')->value('id') if using DB
        $countries = DB::table('countries')->pluck('id', 'slug');

        $states = [
            ['name' => 'California', 'slug' => 'california', 'country_slug' => 'united-states'],
            ['name' => 'Ontario', 'slug' => 'ontario', 'country_slug' => 'canada'],
        ];

        foreach ($states as $state) {
            if (isset($countries[$state['country_slug']])) {
                DB::table('states')->insert([
                    'name' => $state['name'],
                    'slug' => $state['slug'],
                    'country_id' => $countries[$state['country_slug']],
                    'status' => 'active',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
