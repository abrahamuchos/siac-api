<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $this->call([
            AttributeSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,

            RoleSeeder::class,
            UserSeeder::class, // Add Medical Unit Doctor, Assistant Doctor and Materials
            ConsultationHourSeeder::class,
            ConsultationSeeder::class,
            PostSeeder::class,
            InvitationSeeder::class,

            ParaclinicalExaminationSeeder::class,
            LaboratoryTestSeeder::class,
            DrugReactionSeeder::class,
            TreatmentSeeder::class,
            DiseaseSeeder::class,

            PatientSeeder::class,
            AppointmentSeeder::class,
            MedicalRecordSeeder::class, // Add all categories
            ImSeeder::class,
            ArrhythmiaEsvSeeder::class,
            ArrhythmiaOtherSeeder::class,
            FamilyBackgroundSeeder::class,




        ]);
    }

}
