<?php

namespace Database\Seeders;

use App\Models\LaboratoryTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratoryTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        LaboratoryTest::create([
            'name' => 'Archivo',
            'unit' => null,
        ]);
        LaboratoryTest::create([
            'name' => 'Hgb',
            'unit' => 'g/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Plaquetas',
            'unit' => '10^9/L',
        ]);
        LaboratoryTest::create([
            'name' => 'Plaquetas',
            'unit' => 'mm3',
        ]);
        LaboratoryTest::create([
            'name' => 'Glicemia en ayunas',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Glicemia postprandial',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Hgb A1c',
            'unit' => '%',
        ]);
        LaboratoryTest::create([
            'name' => 'Urea',
            'unit' => 'mmol/L',
        ]);
        LaboratoryTest::create([
            'name' => 'Urea',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Urea',
            'unit' => 'mg/L',
        ]);
        LaboratoryTest::create([
            'name' => 'Creatinina',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Colesterol Total',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Colesterol HDL',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Colesterol LDL',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Colesterol No HDL',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Triglicéridos',
            'unit' => 'mg/dL',
        ]);
        LaboratoryTest::create([
            'name' => 'Triglicéridos',
            'unit' => 'mmol/L',
        ]);
        LaboratoryTest::create([
            'name' => 'Tasa Filt Glom',
            'unit' => 'mL/min',
        ]);
        LaboratoryTest::create([
            'name' => 'Htc',
            'unit' => 'mg/dL',
        ]);
    }
}
