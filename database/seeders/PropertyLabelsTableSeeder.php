<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PropertyLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $labels = [
            'For Sale',
            'For Rent',
            'Hot Offer',
            'Featured',
            'Open House',
            'Sold',
            'Rented',
            'New Listing',
            'Best Value',
            'Luxury',
            'Price Reduced',
            'Exclusive',
            'Urgent',
            'Available Soon',
            'Under Construction',
        ];

        foreach ($labels as $label) {
            DB::table('property_labels')->insert([
                'name' => $label,
                'slug' => Str::slug($label),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
