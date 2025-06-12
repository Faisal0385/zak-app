<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PropertyStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $statuses = [
            'Available',
            'Under Offer',
            'Under Contract',
            'Sold',
            'Rented',
            'Reserved',
            'Coming Soon',
            'Not Available',
            'Off Market',
            'Under Construction',
            'Ready to Move',
            'Price Negotiable',
            'Auction',
            'Foreclosure',
            'Open for Booking',
        ];

        foreach ($statuses as $status) {
            DB::table('property_statuses')->insert([
                'name' => $status,
                'slug' => Str::slug($status),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
