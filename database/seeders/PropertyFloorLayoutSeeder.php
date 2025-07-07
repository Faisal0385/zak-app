<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyFloorLayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_floor_layouts')->insert([
            [
                'id' => 1,
                'property_id' => 3,
                'floor_name' => 'Floor Layout 1',
                'floor_price' => '1200',
                'price_postfix' => 'per month',
                'floor_size' => '1500',
                'bedroom' => '5',
                'bathroom' => '2',
                'description' => 'To display each floor layout as a card instead of a table, you can use Bootstrap\'s card grid system. Here\'s how to redesign your Blade template using cards:',
                'floor_layout_image' => 'assets/images/floor_layouts/1749790585_d1c0df22-1f0b-4298-b1e7-4e21053f83c9.jpeg',
                'created_at' => '2025-06-12 22:56:25',
                'updated_at' => '2025-06-12 22:56:25',
            ],
            [
                'id' => 2,
                'property_id' => 1,
                'floor_name' => 'Floor Layout 2',
                'floor_price' => '1200',
                'price_postfix' => 'per month',
                'floor_size' => '1500',
                'bedroom' => '2',
                'bathroom' => '5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'floor_layout_image' => 'assets/images/floor_layouts/1749831005_REEF-999.jpg',
                'created_at' => '2025-06-13 10:10:05',
                'updated_at' => '2025-06-13 10:10:05',
            ],
            [
                'id' => 3,
                'property_id' => 1,
                'floor_name' => 'Floor Layout 3',
                'floor_price' => '1200',
                'price_postfix' => 'per month',
                'floor_size' => '1500',
                'bedroom' => '2',
                'bathroom' => '2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'floor_layout_image' => 'assets/images/floor_layouts/1749920331_reef-4-bedroom.png',
                'created_at' => '2025-06-14 10:58:51',
                'updated_at' => '2025-06-14 10:58:51',
            ],
            [
                'id' => 4,
                'property_id' => 2,
                'floor_name' => 'Floor Layout 4',
                'floor_price' => '1200',
                'price_postfix' => 'per month',
                'floor_size' => '1500',
                'bedroom' => '2',
                'bathroom' => '2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'floor_layout_image' => 'assets/images/floor_layouts/1749920331_reef-4-bedroom.png',
                'created_at' => '2025-06-14 10:58:51',
                'updated_at' => '2025-06-14 10:58:51',
            ],
        ]);
    }
}
