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
                'url' => 'https://facebook.com/yourpage',
                'icon_class' => 'fab fa-facebook-f',
            ],
            [
                'platform' => 'Instagram',
                'url' => 'https://instagram.com/yourpage',
                'icon_class' => 'fab fa-instagram',
            ],
            [
                'platform' => 'YouTube',
                'url' => 'https://youtube.com/yourchannel',
                'icon_class' => 'fab fa-youtube',
            ],
            [
                'platform' => 'Twitter',
                'url' => 'https://twitter.com/yourpage',
                'icon_class' => 'fab fa-twitter',
            ],
        ]);
    }
}
