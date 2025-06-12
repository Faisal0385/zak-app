<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $types = [
            'Apartment',
            'Studio Apartment',
            'Penthouse',
            'Villa',
            'Townhouse',
            'Duplex',
            'Bungalow',
            'Condominium',
            'Farmhouse',
            'Land/Plot',
            'Commercial Space',
            'Office Space',
            'Retail Shop',
            'Warehouse',
            'Factory',
            'Showroom',
            'Hotel/Resort',
            'Serviced Apartment',
            'Hostel/PG',
            'Mixed-use Building',
            'Cottage',
            'Cabin',
            'Container Home',
            'Floating Home',
            'Mobile Home',
        ];

        foreach ($types as $type) {
            DB::table('property_types')->insert([
                'name' => $type,
                'slug' => Str::slug($type),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
