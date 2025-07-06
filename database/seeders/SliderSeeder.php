<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'image' => 'assets/images/sliders/slider1.png',
                'title' => 'Explore Our Services',
                'sub_title' => 'We provide the best solutions',
                'status' => 'active',
            ],
            [
                'image' => 'assets/images/sliders/slider2.png',
                'title' => 'Contact Us Today',
                'sub_title' => 'We are here to help you',
                'status' => 'inactive',
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
