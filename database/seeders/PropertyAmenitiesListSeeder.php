<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyAmenitiesListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_amenities_lists')->insert([
            [
                'id' => 3,
                'property_id' => 3,
                'property_amenity_id' => 6,
                'created_at' => '2025-06-12 21:38:30',
                'updated_at' => '2025-06-12 21:38:30',
            ],
            [
                'id' => 4,
                'property_id' => 1,
                'property_amenity_id' => 1,
                'created_at' => '2025-06-13 09:25:44',
                'updated_at' => '2025-06-13 09:25:44',
            ],
            [
                'id' => 5,
                'property_id' => 1,
                'property_amenity_id' => 2,
                'created_at' => '2025-06-13 09:58:11',
                'updated_at' => '2025-06-13 09:58:11',
            ],
            [
                'id' => 6,
                'property_id' => 1,
                'property_amenity_id' => 8,
                'created_at' => '2025-06-13 09:58:17',
                'updated_at' => '2025-06-13 09:58:17',
            ],
            [
                'id' => 7,
                'property_id' => 1,
                'property_amenity_id' => 9,
                'created_at' => '2025-06-13 09:58:21',
                'updated_at' => '2025-06-13 09:58:21',
            ],
            [
                'id' => 8,
                'property_id' => 1,
                'property_amenity_id' => 6,
                'created_at' => '2025-06-13 09:58:31',
                'updated_at' => '2025-06-13 09:58:31',
            ],
        ]);
    }
}
