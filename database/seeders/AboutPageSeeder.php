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
                'page_title' => 'About GM IT',
                'banner_image' => 'about/banner.jpg',
                'our_story' => 'GM IT began in Dhaka as a small team of dreamers creating practical tech courses in Bangla',
                'mission' => 'Empower learners with hands-on skills for today’s digital jobs.',
                'vision' => 'To become the most trusted learning hub in South Asia.',
                'video_link' => 'https://youtu.be/dQw4w9WgXcQ',
            ]
        );
    }
}
