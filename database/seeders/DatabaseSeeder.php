<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AttributeSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            ConsultationHourSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
            DrugReactionSeeder::class,
            TreatmentSeeder::class,
            DiseaseSeeder::class,
            BackgroundSeeder::class,
            ImSeeder::class,
            ArrhythmiaEsvSeeder::class,
            ArrhythmiaOtherSeeder::class,
            FamilyBackgroundSeeder::class,




        ]);
    }
}
