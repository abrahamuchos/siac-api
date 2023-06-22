<?php

namespace App\Policies;

use App\Exceptions\PatientNotBelongException;
use App\Models\Appointment;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class AppointmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any appointments.
     * @param User $user
     *
     * @return Response
     */
    public function viewAny(User $user): Response
    {
        $roleId = $user->roles()->first()->id;
        if ( $roleId === Role::MD_ROLE || $roleId === Role::UM_ROLE || $roleId === Role::AS_ROLE) {
            return Response::allow();
        } else {
            return Response::denyWithStatus(403);
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User        $user
     * @param Appointment $appointment
     *
     * @return Response|bool
     */
    public function view(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can create an appointment
     * @param User $user
     *
     * @return Response
     */
    public function create(User $user): Response
    {
        $roleId = $user->roles()->first()->id;
        if ($roleId === Role::MD_ROLE || $roleId === Role::UM_ROLE || $roleId === Role::AS_ROLE) {
            return Response::allow();
        } else {
            return Response::denyWithStatus(403);
        }
    }

    /**
     * Determine whether the user can update an appointment.
     *
     * @param User        $user
     * @param Appointment $appointment
     *
     * @return Response
     */
    public function update(User $user, Appointment $appointment): Response
    {
        $roleId = $user->roles()->first()->id;
        $hasAccess = $this->_hasAccessToAppointment($appointment->id, $user);

        if ( $hasAccess && ($roleId === Role::MD_ROLE || $roleId === Role::UM_ROLE || $roleId === Role::AS_ROLE)) {
            return Response::allow();
        } else {
            return Response::denyWithStatus(403);
        }

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User        $user
     * @param Appointment $appointment
     *
     * @return Response|bool
     */
    public function delete(User $user, Appointment $appointment): Response|bool
    {
        $roleId = $user->roles()->first()->id;
        if ($roleId === Role::MD_ROLE || $roleId === Role::UM_ROLE || $roleId === Role::AS_ROLE) {
            return Response::allow();
        } else {
            return Response::denyWithStatus(403);
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User        $user
     * @param Appointment $appointment
     *
     * @return Response|bool
     */
    public function restore(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User        $user
     * @param Appointment $appointment
     *
     * @return Response|bool
     */
    public function forceDelete(User $user, Appointment $appointment)
    {
        //
    }


    /**
     * @param int  $id - id Appointment
     * @param User $user - Auth user
     *
     * @return bool
     */
    private function _hasAccessToAppointment(int $id, User $user): bool
    {
        $roleId = $user->roles()->first()->id;
        $hasAccess = null;

        if ($roleId === Role::UM_ROLE) {
            $appointment = Appointment::where('id', $id)
                ->with('medicalUnitDoctor', fn($q) => $q->where('medical_id', '=', $user->id))
                ->first();
            $hasAccess = $appointment->medicalUnitDoctor;

        }else if($roleId === Role::MD_ROLE){
            $appointment = Appointment::where('id', $id)
                ->with('medicalUnitDoctor', fn($q) => $q->where('doctor_id', '=', $user->id))
                ->first();
            $hasAccess = $appointment->medicalUnitDoctor;

        }else if($roleId === Role::AS_ROLE){
            $conditions = [
                'userId' => $user->id,
                'id' => $id
            ];
            $sql = "select count(app.id)
                    from appointments app
                        join medical_unit_doctors mud on app.medical_unit_doctor_id = mud.id
                        join users u on mud.doctor_id = u.id
                        join assistant_doctors asd on u.id = asd.doctor_id
                    where app.id = :id
                        and asd.assistant_id = :userId;";
            $appointment = DB::select($sql, $conditions);
            $hasAccess = $appointment[0]->count > 0;
        }

        if(!$hasAccess){
            return false;
        }

        return true;
    }
}
