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
            'company_name' => 'Zak Realty',
            'company_subtitle' => "We are proudly selling luxury properties for more than 25 years. We'll fulfill your dreams more than anything else.",
            'office_address' => 'Floor-1, Al Diyar Business Centre. Business Bay, Dubai.',
            'email' => 'info@zakrealty.ae, dawood@zakrealty.co, tehmur@zakrealty.co',
            'mobile' => '+971-50-582-1332, +971-56-430-4059',
            'hot_number' => '',
            'working_days' => 'Monday to Friday',
            'working_hours' => '10.00 AM to 5:00 PM',
            'powered_by' => 'Digital Coffee Tech Team',
            'google_map_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d231074.55172567812!2d55.274193!3d25.18501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682def25f457%3A0x3dd4c4097970950e!2sBusiness%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1751822814371!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'footer_logo' => 'footer_logo.png',      // You must place this image in storage later
            'banner_image' => 'banner.webp',    // Same here
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
