<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $properties = [
            [
                'property_name' => 'Luxury Lakeview Villa',
                'property_id' => 'LLV001',
                'price' => 850000.00,
                'before_price_label' => 'Was',
                'after_price_label' => 'Now',
                'price_unit' => 'USD',
                'price_on_call' => 'no',
                'size' => '4200 sqft',
                'land' => '1.5 acre',
                'room' => 8,
                'bedroom' => 5,
                'bathroom' => 4,
                'garages' => 2,
                'garages_size' => '400 sqft',
                'year_built' => 2019,
                'project_id' => 1, // Make sure project with ID 1 exists
                'city_id' => 1,
                'state_id' => 1,
                'country_id' => 1,
                'description' => 'A luxury villa with lake view and modern amenities.',
                'address' => '123 Lakeview Drive',
                'google_map' => '<iframe src="https://maps.example.com/embed" />',
                'video_url' => 'https://youtube.com/sample-video',
                'featured_image' => 'properties/villa1.jpg',
                'file_attachment' => 'brochures/villa1.pdf',
                'status' => 'active',
                'for_rent' => false,
                'for_sale' => true,
                'hot_offer' => true,
                'sale' => true,
                'sold' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_name' => 'Modern City Apartment',
                'property_id' => 'MCA002',
                'price' => 350000.00,
                'before_price_label' => null,
                'after_price_label' => null,
                'price_unit' => 'USD',
                'price_on_call' => 'yes',
                'size' => '1200 sqft',
                'land' => null,
                'room' => 5,
                'bedroom' => 3,
                'bathroom' => 2,
                'garages' => 1,
                'garages_size' => '180 sqft',
                'year_built' => 2021,
                'project_id' => 2,
                'city_id' => 2,
                'state_id' => 2,
                'country_id' => 1,
                'description' => 'A cozy apartment in the heart of the city.',
                'address' => '456 Downtown Ave',
                'google_map' => '<iframe src="https://maps.example.com/embed" />',
                'video_url' => null,
                'featured_image' => 'properties/apartment1.jpg',
                'file_attachment' => null,
                'status' => 'active',
                'for_rent' => true,
                'for_sale' => false,
                'hot_offer' => false,
                'sale' => false,
                'sold' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('properties')->insert($properties);
    }
}
