<?php

namespace Database\Seeders;

use App\Models\MedicalUnitDoctor;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $medicalUnits = MedicalUnitDoctor::with('doctor')->get();

        foreach ($medicalUnits as $medicalUnit) {

            //Create Patients by medical units doctors
            for($i=0; $i <= 9; $i++){
                //2023-05-11 15:45:40 (+00:00)
                $fakerAdmissionTimes = '2022-'.random_int(1,12).'-'.random_int(1,28).' '.random_int(9,15).':00:00 (+00:00)';

                // Creamos un solo paciente con primera consulta
                $firstConsultation = ($i == 9);
                Patient::factory()
                    ->hasAttached($medicalUnit)
                    ->create([
                        'country_id' => $medicalUnit->doctor->country_id,
                        'state_id' => $medicalUnit->doctor->state_id,
                        'city_id' => $medicalUnit->doctor->city_id,
                        'first_consultation' => $firstConsultation,
                        'admission' => ($firstConsultation ? null : $fakerAdmissionTimes),
                    ]);

            }

        }


    }
}
