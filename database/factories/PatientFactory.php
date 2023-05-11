<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $gender = (bool)random_int(0, 1);
        $bloodType = array(65, 66, 67, 68, 69, 70, 71, 72);
        $raceType = array(74, 75, 76, 77, 78);
        $documentType = array(44, 45, 46, 47);
//        $first_consultation = (bool) random_int(0,1);
        return [
            'history_number' => DB::select("select nextval('history_number_patient_seq')")[0]->nextval,
            'first_name' => fake()->firstName(($gender ? 'male' : 'female')),
            'second_name' => (random_int(0, 1) ? fake()->lastName() : null),
            'first_surname' => fake()->lastName(),
            'second_surname' => (random_int(0, 1) ? fake()->lastName() : null),
            'birthdate' => fake()->date('Y-m-d', '2001-01-01'),
            'email' => fake()->freeEmail,
            'email2' => (random_int(0, 1) ? fake()->freeEmail() : null),
            'gender' => $gender,
            'blood_type' => $bloodType[array_rand($bloodType)],
            'id_document' => fake('es_ES')->dni(),
            'id_document_type' => $documentType[array_rand($documentType)],
            'country_id' => null,
            'state_id' => null,
            'city_id' => null,
            'address' => fake()->address(),
            'username_instagram' => (random_int(0, 1) ? fake()->domainWord() : null),
            'username_twitter' => (random_int(0, 1) ? fake()->domainWord() : null),
            'username_facebook' => (random_int(0, 1) ? fake()->domainWord() : null),
            'phone_number' => fake()->phoneNumber(),
            'family_phone_number' => (random_int(0, 1) ? fake()->phoneNumber() : null),
//            'admission' => null,
//            'first_consultation' => $first_consultation,
            'race_type' => $raceType[array_rand($raceType)]


        ];

    }
}
