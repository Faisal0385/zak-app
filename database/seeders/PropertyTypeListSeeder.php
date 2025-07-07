<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_type_lists')->insert([
            [
                'id' => 1,
                'property_id' => 1,
                'property_type_id' => 1,
                'created_at' => '2025-06-12 06:26:13',
                'updated_at' => '2025-06-12 06:26:13',
            ],
            [
                'id' => 2,
                'property_id' => 2,
                'property_type_id' => 2,
                'created_at' => '2025-06-12 06:33:58',
                'updated_at' => '2025-06-12 06:33:58',
            ],
            [
                'id' => 3,
                'property_id' => 3,
                'property_type_id' => 3,
                'created_at' => '2025-06-12 06:36:58',
                'updated_at' => '2025-06-12 06:36:58',
            ],
            [
                'id' => 4,
                'property_id' => 4,
                'property_type_id' => 4,
                'created_at' => '2025-06-12 06:37:06',
                'updated_at' => '2025-06-12 06:37:06',
            ],
            [
                'id' => 5,
                'property_id' => 5,
                'property_type_id' => 5,
                'created_at' => '2025-06-12 18:02:00',
                'updated_at' => '2025-06-12 18:02:00',
            ],
        ]);
    }
}
