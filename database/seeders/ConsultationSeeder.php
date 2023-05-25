<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->_createSpecialists();
        $this->_createConsultations();
    }


    /**
     * Create specialists
     * @return void
     */
    private function _createSpecialists():void
    {
        $specialist = Consultation::create([
            'name' => 'I/C especialista'
        ]);

        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Neumología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Gastroenterología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Neurología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Nefrología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Ginecología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Psiquiatría',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Otorrinolaringología (ORL)',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Oftalmología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Dermatología',
        ]);
        Consultation::create([
            'consultation_id' => $specialist->id,
            'name' => 'Medicina interna',
        ]);
    }

    /**
     * Create consultantion
     * @return void
     */
    private function _createConsultations():void
    {
        $consultation = Consultation::create([
            'name' => 'Interconsultas I/C'
        ]);
        Consultation::create([
            'consultation_id' => $consultation->id,
            'name' => 'Nutrición',
        ]);
        Consultation::create([
            'consultation_id' => $consultation->id,
            'name' => 'Psicólogo',
        ]);
        Consultation::create([
            'consultation_id' => $consultation->id,
            'name' => 'Fisioterapia',
        ]);
    }
}
