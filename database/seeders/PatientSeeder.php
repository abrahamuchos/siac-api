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
        $fakerAdmissionTimes = array(
            //2023-05-11 15:45:40 (+00:00)
            '2022-'.random_int(1,12).'-'.random_int(15,30).' '.random_int(9,15).':'.random_int(30,59).':40 (+00:00)',
            '2023-0'.random_int(1,3).'-'.random_int(15,30).' '.random_int(9,15).':'.random_int(30,59).':40  (+00:00)',
        );
//        Carbon::createFromFormat('Y-m-d H:i:s  p', $fakerAdmissionTimes[0], 'UTC');


        foreach ($medicalUnits as $medicalUnit) {

            //Create Patients by medical units doctors
            for($i=0; $i <= 9; $i++){
                // Creamos un solo paciente con primera consulta
                $firstConsultation = ($i == 9);
                Patient::factory()
                    ->hasAttached($medicalUnit)
                    ->create([
                        'country_id' => $medicalUnit->doctor->country_id,
                        'state_id' => $medicalUnit->doctor->state_id,
                        'city_id' => $medicalUnit->doctor->city_id,
                        'first_consultation' => $firstConsultation,
                        'admission' => ($firstConsultation ? null : $fakerAdmissionTimes[array_rand($fakerAdmissionTimes)]),
                    ]);

            }

        }


    }
}
