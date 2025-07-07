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
        $this->call([
                // CategorySeeder::class,
            UserSeeder::class,
            SliderSeeder::class,
            SocialMediaLinkSeeder::class,
            SiteSettingsSeeder::class,
            AboutPageSeeder::class,
            CountriesTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            PropertyAmenitiesTableSeeder::class,
            PropertyTypesTableSeeder::class,
            PropertyLabelsTableSeeder::class,
            PropertyStatusesTableSeeder::class,
            ProjectsTableSeeder::class,
            PropertiesTableSeeder::class,
            PropertyTypeListSeeder::class,
            PropertyAmenitiesListSeeder::class,
            PropertyFloorLayoutSeeder::class,
            PropertyGalleryImageSeeder::class
        ]);

    }
}
