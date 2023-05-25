<?php

namespace Database\Factories;

use App\Models\Invitation;

use App\Models\Role;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invitation>
 */
class InvitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $gender = random_int(0, 1);

        return [
            'medical_id' => null,
            'email' => fake()->freeEmail(),
            'first_name' => fake('en_US')->firstName(($gender ? 'male' : 'female')),
            'last_name' => fake('en_US')->lastName(),
            'gender' => $gender,
            'role' => null,
            'token' => Invitation::createToken(),
            'accepted_at' => null,
            'expires_at' => Carbon::now()->addDays(),
        ];
    }

    /**
     * Invitation to unit medical
     * @return InvitationFactory
     */
    public function withUnitMedical(): InvitationFactory
    {
        return $this->state([
            'first_name' => fake('en_US')->company() . ' (UM)',
            'last_name' => null,
            'email' => fake()->companyEmail(),
            'gender' => true,
            'role' => Role::UM_ROLE,
        ]);
    }

    /**
     * @param int $medicalId
     *
     * @return InvitationFactory
     */
    public function withDoctor(int $medicalId): InvitationFactory
    {
        return $this->state([
            'medical_id' => $medicalId,
            'role' => Role::MD_ROLE,
        ]);
    }

    /**
     * @param int $medicalId
     *
     * @return InvitationFactory
     */
    public function withAssistant(int $medicalId): InvitationFactory
    {
        return $this->state([
            'medical_id' => $medicalId,
            'role' => Role::AS_ROLE
        ]);
    }
}
