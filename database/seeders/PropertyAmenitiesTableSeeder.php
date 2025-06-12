<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PropertyAmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $amenities = [
            'Waterfront wellness community',
            'Biodiversity',
            'Re-oxygenating water features',
            'Climate controlled outdoor shaded terrace',
            'Karesansui Balcony garden',
            'EV charging facilities',
            'Solar water heater',
            'Energy efficient LED lighting',
            'UV-proof double glazing',
            'Chemical treatment and filtration for lake water',
            'Smart irrigation system',
            'Shaded parking spaces',
            'Self-shading building facade',
            'Maximise green spaces',
            'Energy & water efficiency',
            'Smart home system',
            'Insulated building envelope',
            'Waterproofing With 10 Years Warranty',
            'Beverage Chiller',
            'Enhanced Drainage System',
        ];

        foreach ($amenities as $amenity) {
            DB::table('property_amenities')->insert([
                'name' => $amenity,
                'slug' => Str::slug($amenity),
                'icon_class' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
