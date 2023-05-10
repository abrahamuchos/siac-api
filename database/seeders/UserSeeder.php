<?php

namespace Database\Seeders;

use App\Models\AssistantDoctor;
use App\Models\City;
use App\Models\MedicalUnitDoctor;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $countries = array(64, 48, 11, 173, 170, 239);
        $adminRole = Role::create([
            'name' => 'admin'
        ]);
        $umRole = Role::create([
            'name' => 'Unidad médica (Um)'
        ]);
        $mdRole = Role::create([
            'name' => 'doctor (Md)'
        ]);
        $asRole = Role::create([
            'name' => 'Asistente médica (As)'
        ]);
        $sRole = Role::create([
            'name' => 'Secretaria (S)'
        ]);

        for ($i = 0; $i <= 9; $i++) {
            $countryId = $countries[array_rand($countries)];
            $stateId = State::whereHas('country', function (Builder $query) use ($countryId) {
                return $query->where('id', $countryId);
            })->get()->random()->id;
            $cityId = City::whereHas('state', function (Builder $query) use ($stateId) {
                return $query->where('id', $stateId);
            })->get()->random()->id;

            //Create Unit Medical (UM) and attach role
            $um = User::factory()
                ->withUnitMedical($countryId, $stateId, $cityId)
                ->hasAttached($umRole)
                ->create();


            for ($j = 0; $j <= 9; $j++) {
                $gender = (bool)random_int(0, 1);
                $idDocument = $this->_idDocument($countryId);
                // Create Doctor and attach role
                $doctor = User::factory()
                    ->withDoctor($gender, $idDocument, $countryId, $stateId, $cityId)
                    ->hasAttached($mdRole)
                    ->create();

                //Associated Medical unit Doctor
                MedicalUnitDoctor::create([
                    'doctor_id' => $doctor->id,
                    'medical_id' => $um->id
                ]);

                //Por cada 5 doctores creamos 1 asistente (y se los asignamos)
                if ($j === 0 || $j === 5) {
                    $gender = (bool)random_int(0, 1);
                    $idDocument = $this->_idDocument($countryId);
                    //Create assistant and attach role
                    $assistant = User::factory()
                        ->withAssistant($gender, $idDocument, $countryId, $stateId, $cityId)
                        ->hasAttached($asRole)
                        ->create();
                }
                // Asociamos los asistentes con doctores (5 doctores por 1 asistente)
                AssistantDoctor::create([
                    'doctor_id' => $doctor->id,
                    'assistant_id' => $assistant->id
                ]);


            }
        }
    }

    /**
     * Determine identification document type by country
     *
     * @param $country integer
     *
     * @return array|null
     */
    private function _idDocument(int $country): array|null
    {
        if ($country === 11) {
            //Argentina
            return [fake('es_ES')->dni(), 46];
        } elseif ($country === 48) {
            //Colombia
            return [rand(1111111111, 9999999999), 45];
        } elseif ($country === 64) {
            //Ecuador
            return [rand(1111111111, 9999999999), 44];
        } elseif ($country === 170) {
            //Panama
            // 1-1234-12345
            $ci = fake()->randomNumber(1, true) . '-' . fake()->randomNumber(4, true) . '-' . fake()->randomNumber(4,
                    true);
            return [$ci, 44];
        } elseif ($country === 173) {
            // Peru
            return [fake('es_ES')->dni(), 46];
        } elseif ($country === 239) {
            //Venezuela
            return [fake('es_VE')->nationalId(), 44];
        } else {
            return null;
        }
    }
}
