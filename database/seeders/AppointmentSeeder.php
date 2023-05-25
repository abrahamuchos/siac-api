<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {

        $this->_firstConsulting();
        $this->_regularConsulting();
    }

    /**
     * Create appointments to patients with first consulting
     * @return void
     * @throws \Exception
     */
    private function _firstConsulting(): void
    {
        $patients = Patient::whereFirstConsultation(true)->get();
        $now = Carbon::now('America/Caracas');

        foreach ($patients as $patient){
            $now->hour = random_int(11, 15);
            $now->minute = 12;
            $now->second = 00;
            $endTime = $now->copy();

            Appointment::create([
                'medical_unit_doctor_id' => $patient->medicalUnitDoctors()->first()->id,
                'patient_id' => $patient->id,
                'start_time' => $now,
                'end_time' => $endTime->addMinutes(60),
                'reason' => fake()->sentence(4),
                'description' => fake()->paragraph(1),
                'is_open' => true,
            ]);
        }
    }

    /**
     * Patients with first's consultation complete and regular consultation
     * @return void
     */
    private function _regularConsulting(): void
    {
        $patients = Patient::whereFirstConsultation(false)->get();
        foreach ($patients as $patient) {

            // Primera cita médica
            $startTime = Carbon::parse($patient->admission);
            Appointment::create([
                'medical_unit_doctor_id' => $patient->medicalUnitDoctors()->first()->id,
                'patient_id' => $patient->id,
                'start_time' => $patient->admission,
                'end_time' => $startTime->addMinutes(45),
                'reason' => fake()->sentence(4),
                'description' => fake()->paragraph(1),
                'is_open' => false,

            ]);

            $startTime = Carbon::parse($patient->admission);
            $endTime = Carbon::parse($patient->admission);
            // Citas regulares
            Appointment::create([
                'medical_unit_doctor_id' => $patient->medicalUnitDoctors()->first()->id,
                'patient_id' => $patient->id,
                'start_time' => $startTime->addMonths(1),
                'end_time' => $endTime->addMonths(1)->addMinutes(20),
                'reason' => fake()->sentence(2),
                'description' => fake()->paragraph(1),
                'is_open' => false,
            ]);
        }
    }
}
