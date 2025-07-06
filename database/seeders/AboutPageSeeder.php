<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutPage::updateOrCreate(
            ['id' => 1],                 // force a single known row
            [
                'page_title' => 'About Us',
                'banner_image' => 'https://zakrealty.co/storage/about/5Wv30HI1f7vNBHOESAlPnTb6brzOaP5TwO4PIL5X.webp',
                'our_story' => 'At ZAK Realty, our mission is to redefine real estate brokerage in Dubai by delivering exceptional service, transparency, and expert guidance in the off-plan and secondary markets. We are committed to helping clients make informed investment decisions through personalized solutions, in-depth market knowledge, and unwavering integrity. By fostering long-term relationships built on trust, we aim to be the preferred partner for buyers, sellers, and investors navigating Dubai’s dynamic property landscape.',
                'mission' => 'At ZAK Realty, our mission is to redefine real estate brokerage in Dubai by delivering exceptional service, transparency, and expert guidance in the off-plan and secondary markets. We are committed to helping clients make informed investment decisions through personalized solutions, in-depth market knowledge, and unwavering integrity. By fostering long-term relationships built on trust, we aim to be the preferred partner for buyers, sellers, and investors navigating Dubai’s dynamic property landscape.',
                'vision' => 'Our vision is to become the most trusted and innovative real estate brokerage in Dubai, known for excellence in off-plan and resale property transactions. By leveraging our founder’s decade-long expertise and deep local insights, we strive to set new standards in client service, market intelligence, and investment success. Through continuous growth and adaptability, ZAK Realty aims to shape the future of real estate in Dubai, turning aspirations into tangible, rewarding investments.',
                'video_link' => 'oz7wmF51Gwk',
            ]
        );
    }
}
