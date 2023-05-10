<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'public_id' => fake()->uuid(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'first_surname' => fake()->lastName(),
            'second_surname' => fake()->lastName(),
            'birthdate' => fake()->date(),
            'email' => fake()->freeEmail(),
            'public_email' => null,
            'id_document' => fake('es_VE')->nationalId(), //CI
            'id_document_type' => 43, //CI
            'medical_document' => (random_int(0, 1) ? fake()->isbn13() : null),
            'gender' => true,
            'office_phone' => fake()->phoneNumber(),
            'office_phone2' => (random_int(0, 1) ? fake()->phoneNumber() : null),
            'grade_type' => null,
            'username_instagram' => (random_int(0, 1) ? fake()->domainWord() : null),
            'username_twitter' => (random_int(0, 1) ? fake()->domainWord() : null),
            'username_facebook' => (random_int(0, 1) ? fake()->domainWord() : null),
            'website' => null,
            'country_id' => null,
            'state_id' => null,
            'city_id' => null,
            'address' => fake()->address(),
            'postal_code' => (random_int(0, 1) ? fake()->randomNumber(5, true) : null),
            'avatar' => null,
            'letterhead' => null
        ];
    }

    /**
     * @param $countryId int
     * @param $stateId   int
     * @param $cityId    int
     *
     * @return UserFactory
     * @throws \Exception
     */
    public function withUnitMedical(int $countryId, int $stateId, int $cityId): UserFactory
    {

        return $this->state([
            'first_name' => fake('en_US')->company() . ' (UM)',
            'second_name' => null,
            'first_surname' => null,
            'second_surname' => null,
            'email' => fake()->companyEmail,
            'public_email' => (random_int(0, 1) ? fake()->companyEmail : null),
            'id_document' => fake('en_US')->ssn(),
            'id_document_type' => 48,
            'medical_document' => null,
            'office_phone2' => (random_int(0, 1) ? fake()->phoneNumber() : null),
            'country_id' => $countryId,
            'state_id' => $stateId,
            'city_id' => $cityId,
            'grade_type' => 1,
            'website' => (random_int(0, 1) ? fake()->url() : null),
            'avatar' => (random_int(0, 1) ? 'https://placehold.co/600x400?text=Avatart+UM' : null),
            'letterhead' => (random_int(0, 1) ? 'https://placehold.co/600x400?text=Letterhead' : null),
        ]);
    }

    /**
     * @param bool  $gender
     * @param array $idDocument
     * @param int   $countryId
     * @param int   $stateId
     * @param int   $cityId
     *
     * @return UserFactory
     * @throws \Exception
     */
    public function withDoctor(bool $gender, array $idDocument, int $countryId, int $stateId, int $cityId): UserFactory
    {
        return $this->state([
            'first_name' => fake()->firstName(($gender? 'male' : 'female')),
            'second_name' => (random_int(0, 1) ? fake()->lastName() : null),
            'second_surname' => (random_int(0, 1) ? fake()->lastName() : null),
            'id_document' => $idDocument[0],
            'id_document_type' => $idDocument[1],
            'gender' => $gender,
            'grade_type' => ($gender? 50 : 51),
            'website' => (random_int(0, 1) ? fake()->url() : null),
            'country_id' => $countryId,
            'state_id' => $stateId,
            'city_id' => $cityId,
            'avatar' => (random_int(0, 1) ? 'https://placehold.co/600x400?text=Avatart+Md' : null),
            'letterhead' => (random_int(0, 1) ? 'https://placehold.co/600x400?text=Letterhead+Md' : null),
        ]);
    }

    /**
     * @param bool  $gender
     * @param array $idDocument
     * @param int   $countryId
     * @param int   $stateId
     * @param int   $cityId
     *
     * @return UserFactory
     * @throws \Exception
     */
    public function withAssistant(bool $gender, array $idDocument, int $countryId, int $stateId, int $cityId): UserFactory
    {
        return $this->state([
            'first_name' => fake()->firstName(($gender? 'male' : 'female')). ' (AS)',
            'second_name' => (random_int(0, 1) ? fake()->lastName() : null),
            'second_surname' => (random_int(0, 1) ? fake()->lastName() : null),
            'id_document' => $idDocument[0],
            'id_document_type' => $idDocument[1],
            'gender' => $gender,
            'grade_type' => ($gender? 52 : 53),
            'country_id' => $countryId,
            'state_id' => $stateId,
            'city_id' => $cityId,
            'avatar' => (random_int(0, 1) ? 'https://placehold.co/600x400?text=Avatart+As' : null),
        ]);
    }
}
