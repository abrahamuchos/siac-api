<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $arrhythmiaFa =  Disease::create([
           'name' =>  'Arritmia - FA Tipo'
        ]);
        Disease::create([
           'disease_id' => $arrhythmiaFa->id,
           'name' => 'Crónica'
        ]);
        Disease::create([
           'disease_id' => $arrhythmiaFa->id,
           'name' => 'Paratorasica'
        ]);


        $ictus =  Disease::create([
            'name' =>  'Enfermedad cerebrovascular (ICTUS) - Tipo'
        ]);
        Disease::create([
            'disease_id' => $ictus->id,
            'name' => 'Hemorrágico'
        ]);
        $ischemic = Disease::create([
            'disease_id' => $ictus->id,
            'name' => 'Isquémico'
        ]);
        Disease::create([
            'disease_id' => $ischemic->id,
            'name' => 'ACV isquémico establecido'
        ]);
        Disease::create([
            'disease_id' => $ischemic->id,
            'name' => 'Infarto cerebral'
        ]);

        $kinship =  Disease::create([
            'name' =>  'Enfermedades familiares - Tipo'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'DMt2'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'Dislipidemia'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'Enfermedad arterial coronaria precoz (hombres < 55, mujeres < 65)'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'Muerte súbita'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'Hipercolesterolemia familiar homocigótica'
        ]);
        Disease::create([
            'disease_id' => $kinship->id,
            'name' => 'ICTUS'
        ]);

    }
}
