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
                'project_name' => 'KNIGHTSBRIDGE',
                'slug' => Str::slug('KNIGHTSBRIDGE'),
                'developer_name' => 'LEOS Developer',
                'image' => 'assets/images/projects/KNIGHTSBRIDGE.png',
                'status' => 'active',
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'REEF 999',
                'slug' => Str::slug('REEF 999'),
                'developer_name' => 'REEF Developer',
                'image' => 'assets/images/projects/REEF-999.jpg',
                'is_featured' => false,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Chelsea Residences',
                'slug' => Str::slug('Chelsea Residences'),
                'developer_name' => 'Metro Builders',
                'image' => 'assets/images/projects/Chelsea_Residences.jpg',
                'is_featured' => true,
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
