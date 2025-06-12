<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     // CategorySeeder::class,
        // ]);
        // $this->call(AboutPageSeeder::class);
        $this->call([
            SocialMediaLinkSeeder::class,
            SiteSettingsSeeder::class,
            CategorySeeder::class,
            AboutPageSeeder::class,
            CountriesTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            PropertyAmenitiesTableSeeder::class,
            PropertyTypesTableSeeder::class,
            PropertyLabelsTableSeeder::class,
            PropertyStatusesTableSeeder::class,
            ProjectsTableSeeder::class,
            PropertiesTableSeeder::class
        ]);

    }
}
