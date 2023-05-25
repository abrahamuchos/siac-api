<?php

namespace Database\Seeders;

use App\Models\ParaclinicalExamination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParaclinicalExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        ParaclinicalExamination::create([
            'name' => 'Laboratorio'
        ]);
        ParaclinicalExamination::create([
            'name' => 'Rayos X torax'
        ]);
        ParaclinicalExamination::create([
            'name' => 'Ecocardiograma'
        ]);
        ParaclinicalExamination::create([
            'name' => 'Duplex arterial'
        ]);
        ParaclinicalExamination::create([
            'name' => 'Angio-Tac coronaria'
        ]);
        ParaclinicalExamination::create([
            'name' => 'MAPA'
        ]);
        ParaclinicalExamination::create([
            'name' => 'EKG'
        ]);
        ParaclinicalExamination::create([
            'name' => 'Prueba de esfuerzo'
        ]);
    }
}
