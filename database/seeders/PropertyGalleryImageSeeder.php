<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyGalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_gallery_images')->insert([
            [
                'id' => 1,
                'property_id' => 2,
                'gallery_image' => 'assets/images/property_gallery/7wYBtCbvEf2x72JQIG52kMzfLMLbB9yv5DCdzdVQ.webp',
                'created_at' => '2025-06-05 12:30:27',
                'updated_at' => '2025-06-05 12:30:27',
            ],
            [
                'id' => 3,
                'property_id' => 1,
                'gallery_image' => 'assets/images/property_gallery/oSvVDMILb0d2RXLUGijhu96JwGfKy690hXsIB1kq.webp',
                'created_at' => '2025-06-13 10:41:46',
                'updated_at' => '2025-06-13 10:41:46',
            ],
            [
                'id' => 4,
                'property_id' => 1,
                'gallery_image' => 'assets/images/property_gallery/9iAIPrFUnkIqk4Pm4NtuywIUYORJ0nVnsppTLdkx.webp',
                'created_at' => '2025-06-13 10:41:54',
                'updated_at' => '2025-06-13 10:41:54',
            ],
        ]);
    }
}
