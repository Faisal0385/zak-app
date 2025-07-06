<?php

namespace Database\Seeders;

use App\Models\SocialMediaLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMediaLink::insert([
            [
                'platform' => 'Facebook',
                'url' => 'https://www.facebook.com/zakrealty.uae',
                'icon_class' => 'fab fa-facebook-f',
            ],
            [
                'platform' => 'Instagram',
                'url' => 'https://www.instagram.com/zakrealty.uae/',
                'icon_class' => 'fab fa-instagram',
            ],
            [
                'platform' => 'YouTube',
                'url' => '#',
                'icon_class' => 'fab fa-youtube',
            ],
            [
                'platform' => 'Twitter',
                'url' => '#',
                'icon_class' => 'fab fa-twitter',
            ],
            [
                'platform' => 'Linkedin',
                'url' => '#',
                'icon_class' => 'fa-brands fa-linkedin',
            ],
        ]);
    }
}
