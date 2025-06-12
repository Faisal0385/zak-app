<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $projects = [
            [
                'project_name' => 'Waterfront Residences',
                'slug' => Str::slug('Waterfront Residences'),
                'developer_name' => 'GreenBuild Developers',
                'image' => 'projects/waterfront.jpg',
                'status' => 'active',
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Eco Valley Homes',
                'slug' => Str::slug('Eco Valley Homes'),
                'developer_name' => 'Eco Living Ltd',
                'image' => 'projects/ecovalley.jpg',
                'is_featured' => false,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Urban Heights',
                'slug' => Str::slug('Urban Heights'),
                'developer_name' => 'Metro Builders',
                'image' => 'projects/urbanheights.jpg',
                'is_featured' => true,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Palm Grove Villas',
                'slug' => Str::slug('Palm Grove Villas'),
                'developer_name' => 'Tropical Estates Co.',
                'image' => 'projects/palmgrove.jpg',
                'is_featured' => false,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($projects as $project) {
            DB::table('projects')->insert([
                'project_name' => $project['project_name'],
                'slug' => Str::slug($project['project_name']),
                'developer_name' => $project['developer_name'],
                'image' => $project['image'],
                'status' => 'active',
                'is_featured' => $project['is_featured'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
