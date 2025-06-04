<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'page_title' => 'Welcome to Our Site',
            'company_name' => 'Digital Coffee Ltd.',
            'company_subtitle' => 'Empowering Through Innovation',
            'office_address' => '123 Main Street, Dhaka, Bangladesh',
            'email' => 'info@digitalcoffee.com',
            'mobile' => '01700000000',
            'hot_number' => '09600000000',
            'working_days' => 'Sunday to Thursday',
            'working_hours' => '9 AM - 6 PM',
            'powered_by' => 'Digital Coffee Tech Team',
            'google_map_iframe' => '<iframe src="https://maps.google.com/example"></iframe>',
            'footer_logo' => 'footer_logo.png',      // You must place this image in storage later
            'banner_image' => 'banner_image.jpg',    // Same here
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
