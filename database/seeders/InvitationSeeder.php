<?php

namespace Database\Seeders;

use App\Models\Invitation;
use App\Models\InvitationDoctor;
use App\Models\Role;
use App\Models\User;
use Database\Factories\InvitationDoctorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        Create new units medicals
        for ($i = 0; $i <= 4; $i++) {
            Invitation::factory()
                ->withUnitMedical()
                ->create();

        }

//        Create new doctors
        $umId = User::whereHas('roles', function (Builder $query) {
            return $query->where('id', '=', Role::UM_ROLE);
        })->get()->random(1)->first()->id;
        Invitation::factory()
            ->count(2)
            ->withDoctor($umId)
            ->create();

        //Create new Assistants and asociate with doctors
        // Random doctors (MD) from the same medical unit UM
        $umId = 1;
        $mdIds = [2, 4, 5, 6, 7, 8, 10, 11, 12];
        Invitation::factory()
            ->withAssistant($umId)
            ->afterCreating(function (Invitation $invitation) use ($mdIds) {
                foreach ($mdIds as $mdId) {
                    InvitationDoctor::factory()
                        ->create([
                            'invitation_id' => $invitation->id,
                            'doctor_id' => $mdId
                        ]);
                }
            })
            ->create();


    }
}
