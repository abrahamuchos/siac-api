<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Appointments\AppointmentRequest;
use App\Http\Requests\Appointments\UpdateRequest;
use App\Models\Appointment;
use App\Models\Attribute;
use App\Models\MedicalUnitDoctor;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Get all appointments by date
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function getByDate(Request $request): JsonResponse
    {
        $this->authorize('viewAny', Appointment::class);
        $user = Auth::user();
        $roleId = $user->roles()->first()->id;
        $start = Carbon::parse($request->query('start'))->setTimezone('UTC');
        $end = Carbon::parse($request->query('end'))->setTimezone('UTC');
        $conditions = [
            'userId' => $user->id,
            'start' => $start,
            'end' => $end
        ];
        if ($roleId === Role::UM_ROLE) {
            $sql = "select  ap.id,
                        concat('(',a.value,' ',u2.first_surname, '  ' ,left(upper(u2.first_name), 1), '.)   ',p.first_name,' ', p.first_surname) as title,
                        ap.start_time as start,
                        ap.end_time as \"end\",
                        p.first_consultation as \"firstConsultation\",
                        case when first_consultation = true then '#E3E35F' else '#4A70EF' end as \"color\"
                        from users u
                            join medical_unit_doctors mud on u.id = mud.medical_id
                            join users u2 on mud.doctor_id = u2.id
                            join appointments ap on mud.id = ap.medical_unit_doctor_id
                            join patients p on ap.patient_id = p.id
                            join attributes a on u2.grade_type = a.id
                        where u.id = :userId
                        and ap.start_time >= :start
                        and ap.end_time < :end
                        and ap.deleted_at isnull ;";

            $appointments = DB::select($sql, $conditions);
        } else {
            if ($roleId === Role::MD_ROLE) {
                $sql = "select  ap.id,
                        concat(p.first_name,' ', p.first_surname) as title,
                        ap.start_time as start,
                        ap.end_time as \"end\",
                        ap.reason,
                        p.first_consultation as \"firstConsultation\",
                        case when first_consultation = true then '#E3E35F' else '#4A70EF' end as \"color\"
                        from users u
                            join medical_unit_doctors mud on u.id = mud.doctor_id
                            join doctor_patient dp on mud.id = dp.medical_unit_doctor_id
                            join patients p on dp.patient_id = p.id
                            join appointments ap on p.id = ap.patient_id
                        where u.id = :userId
                        and ap.start_time >= :start
                        and ap.end_time < :end
                        and ap.deleted_at isnull ;";

                $appointments = DB::select($sql, $conditions);
            } else {
                if ($roleId === Role::AS_ROLE) {
                    $sql = "select  ap.id,
                        concat('(',u2.first_surname, ' .',left(upper(u2.first_name), 1), ') ',p.first_name,' ', p.first_surname) as title,
                        ap.start_time as start,
                        ap.end_time as \"end\",
                        p.first_consultation as \"firstConsultation\",
                        concat('Paciente: ', p.first_name, ' ', p.first_surname,' (' ,p.id_document, ')', '&nbsp; - Motivo: ', ap.reason) as \"moreInfo\",
                        case when first_consultation = true then '#E3E35F' else '#4A70EF' end as \"color\"
                        from users u
                            join assistant_doctors ad on u.id = ad.assistant_id
                            join users u2 on ad.doctor_id = u2.id
                            join medical_unit_doctors mud on u2.id = mud.doctor_id
                            join appointments ap on mud.id = ap.medical_unit_doctor_id
                            join patients p on ap.patient_id = p.id
                        where u.id = :userId
                        and ap.start_time >= :start
                        and ap.end_time < :end
                        and ap.deleted_at isnull ;";

                    $appointments = DB::select($sql, $conditions);
                } else {
                    $appointments = [];
                }
            }
        }


        return response()->json([
            'appointments' => $appointments
        ]);

    }


    /**
     * Get consultation hours, only to doctors (MD)
     * @return JsonResponse
     */
    public function getConsultationHours(): JsonResponse
    {
        $user = Auth::user();
        $roleId = $user->roles()->first()->id;

        if ($roleId === Role::MD_ROLE) {
            $consultations = $user
                ->consultationHours()
                ->with('dayType')
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'doctorId' => $item->doctor_id,
                        'daysOfWeek' => $item->dayType->value,
                        'startTime' => $item->start_time,
                        'endTime' => $item->end_time
                    ];
                });
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Role not found',
                'code' => 10400,
                'details' => null
            ], 403);
        }

        return response()->json($consultations);
    }

    /**
     * Get all consultation hours by roles
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getAllConsultationHours(Request $request): JsonResponse
    {
        $request->validate([
            'doctorId' => 'required|numeric'
        ]);
        $doctorId = $request->query('doctorId');

        try{
            $doctor = User::findOrFail($doctorId);
            $consultations = $doctor->consultationHours()->with('dayType')->get();
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => true,
                'code' => 10002,
                'message' => 'El doctor no existe o no fue encontrado',
                'details' => $e->getMessage()
            ], 404);
        }

        $dayTime = $consultations->map(function($item){
            return [
                'doctorId' => $item->doctor_id,
                'dayOfWeek' => $item->dayType->value,
                'startTime' => $item->start_time,
                'endTime' => $item->end_time
            ];
        });


        return response()->json([
            'consultationHours' => $dayTime
        ]);
    }

    /**
     * Get all associated doctors (specialists)
     * @return JsonResponse
     */
    public function getSpecialists(): JsonResponse
    {
        $user = Auth::user();
        $roleId = $user->roles()->first()->id;
        $doctors = [];

        if ($roleId === Role::ADMIN_ROLE) {
            $doctors = User::whereHas('roles', function ($query) {
                $query->where('id', Role::MD_ROLE);
            })
                ->get();

        } elseif ($roleId === Role::UM_ROLE) {
            $doctors = $user->medicalUnits()->with('doctor')
                ->get()
                ->pluck('doctor');

        } elseif ($roleId === Role::AS_ROLE) {
            $doctors = $user->assistants()->with('doctor')
                ->get()
                ->pluck('doctor');
        }

        return response()->json([
            'specialists' => $doctors->map(function ($doctor) {
                return [
                    'id' => $doctor->id,
                    'firstName' => $doctor->first_name,
                    'firstSurname' => $doctor->first_surname,
                    'idDocument' => $doctor->id_document,
                    'gradeType' => $doctor->gradeType->value
                ];
            })
        ]);
    }

    /**
     * Save new resource
     *
     * @param AppointmentRequest $request
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(AppointmentRequest $request): JsonResponse
    {
        $this->authorize('create', Appointment::class);
        $appointment = $request->only([
            'idPatient',
            'idDoctor',
            'idMedicalUnit',
            'reason',
            'description',
            'date',
            'startTime',
            'endTime'
        ]);
        $formatDate = $this->_formatDateTime($appointment['date'], $appointment['startTime'], $appointment['endTime']);

        try {
            $doctor = MedicalUnitDoctor::where([
                ['doctor_id', $appointment['idDoctor']],
                ['medical_id', $appointment['idMedicalUnit']]
            ])->firstOrFail();

            $doctor->appointments()->create([
                'medical_unit_doctor_id' => $appointment['idMedicalUnit'],
                'patient_id' => $appointment['idPatient'],
                'start_time' => $formatDate['startTime'],
                'end_time' => $formatDate['endTime'],
                'reason' => $appointment['reason'],
                'description' => $appointment['description'],
                'is_open' => true,
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => true,
                'code' => 10001,
                'message' => 'La unidad medica no esta relacionada al doctor',
                'details' => $e->getMessage()
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'code' => 10500,
                'message' => 'Error al crear una nueva cita medica',
                'details' => $e->getMessage()
            ], 500);
        }

        return response()->json();
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function show(Request $request): JsonResponse
    {
        $request->validate([
            'id' => 'required|numeric',
        ]);
        $id = $request->query('id');
        $user = Auth::user();
        $roleId = $user->roles()->first()->id;
        $conditions = [
            'idUser' => Auth::user()->id,
            'idAppointment' => $id
        ];

        if ($roleId === Role::UM_ROLE) {
            $sql = 'select app.id      as "idAppointment",
                       app.reason,
                       app.description,
                       app.start_time  as "startTime",
                       app.end_time    as "endTime",
                       p.id            as "idPatient",
                       p.id_document   as "patientDocument",
                       p.first_name    as "patientFirstName",
                       p.first_surname as "patientFirstSurname",
                       u.id            as "idDoctor",
                       u.id_document   as "doctorIdDocument",
                       u.first_name    as "doctorFirstName",
                       u.first_surname as "doctorFirstSurname",
                       a.value         as "documentType",
                       a2.value        as "gradeType"
                from patients p
                         join appointments app on p.id = app.patient_id
                         join medical_unit_doctors mud on app.medical_unit_doctor_id = mud.id
                         join users u on mud.doctor_id = u.id
                         join users u2 on mud.medical_id = u2.id
                         join attributes a on u.id_document_type = a.id
                         join attributes a2 on u.grade_type = a2.id
                where app.id = :idAppointment
                  and app.deleted_at IS NULL
                  and u2.id = :idUser;';
            $appointment = DB::select($sql, $conditions);

        } elseif ($roleId === Role::MD_ROLE) {
            $sql = 'select app.id      as "idAppointment",
                       app.reason,
                       app.description,
                       app.start_time  as "startTime",
                       app.end_time    as "endTime",
                       p.id            as "idPatient",
                       p.id_document   as "patientDocument",
                       p.first_name    as "patientFirstName",
                       p.first_surname as "patientFirstSurname",
                       u.id            as "idDoctor",
                       u.id_document   as "doctorIdDocument",
                       u.first_name    as "doctorFirstName",
                       u.first_surname as "doctorFirstSurname",
                       a.value         as "documentType",
                       a2.value        as "gradeType"
                from patients p
                         join appointments app on p.id = app.patient_id
                         join medical_unit_doctors mud on app.medical_unit_doctor_id = mud.id
                         join users u on mud.doctor_id = u.id
                         join attributes a on u.id_document_type = a.id
                         join attributes a2 on u.grade_type = a2.id
                where app.id = :idAppointment
                  and app.deleted_at IS NULL
                  and u.id = :idUser;';
            $appointment = DB::select($sql, $conditions);

        } elseif ($roleId === Role::AS_ROLE) {
            $sql = 'select app.id          as "idAppointment",
                   app.reason,
                   app.description,
                   app.start_time  as "startTime",
                   app.end_time    as "endTime",
                   p.id            as "idPatient",
                   p.id_document   as "patientDocument",
                   p.first_name    as "patientFirstName",
                   p.first_surname as "patientFirstSurname",
                   u.id            as "idDoctor",
                   u.id_document   as "doctorIdDocument",
                   u.first_name    as "doctorFirstName",
                   u.first_surname as "doctorFirstSurname",
                   a.value         as "documentType"
                from patients p
                         join appointments app on p.id = app.patient_id
                         join medical_unit_doctors mud on app.medical_unit_doctor_id = mud.id
                         join users u on mud.doctor_id = u.id
                         join assistant_doctors asd on u.id = asd.doctor_id
                         join attributes a on p.id_document_type = a.id
                         join attributes a2 on u.grade_type = a2.id
                where app.id = :idAppointment
                  and app.deleted_at IS NULL
                  and asd.assistant_id = :idUser;';
            $appointment = DB::select($sql, $conditions);

        } else {

            return response()->json([
                'error' => true,
                'message' => 'Role not found',
                'code' => 10400,
                'details' => null
            ], 403);
        }

        if (empty($appointment)) {
            return response()->json([], 404);
        } else {
            return response()->json([
                'appointment' => [
                    'id' => $appointment[0]->idAppointment,
                    'reason' => $appointment[0]->reason,
                    'description' => $appointment[0]->description,
                    'startTime' => $appointment[0]->startTime,
                    'endTime' => $appointment[0]->endTime,
                    'patient' => [
                        'id' => $appointment[0]->idPatient,
                        'firstName' => $appointment[0]->patientFirstName,
                        'firstSurname' => $appointment[0]->patientFirstSurname,
                        'document' => $appointment[0]->patientDocument
                    ],
                    'doctor' => [
                        'id' => $appointment[0]->idDoctor,
                        'firstName' => $appointment[0]->doctorFirstName,
                        'firstSurname' => $appointment[0]->doctorFirstSurname,
                        'idDocument' => $appointment[0]->doctorIdDocument,
                        'documentType' => $appointment[0]->documentType,
                    ]
                ]
            ]);
        }

    }

    /**
     * @param UpdateRequest $request
     * @param Appointment   $appointment
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(UpdateRequest $request, Appointment $appointment): JsonResponse
    {
        $this->authorize('update', $appointment);
        $user = Auth::user();
        $roleId = $user->roles()->first()->id;
        $dates = $this->_formatDateTime($request->date, $request->startTime, $request->endTime);

        if ($roleId === Role::UM_ROLE) {
            try {
                $medicalUnitDoctor = MedicalUnitDoctor::where([
                    ['doctor_id', '=', $request->idDoctor],
                    ['medical_id', '=', $user->id]
                ])->firstorFail();
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'error' => true,
                    'message' => 'La unidad medica no esta relacionada al doctor',
                    'code' => 10001,
                    'details' => $e->getMessage()
                ], 404);
            }

        } elseif ($roleId === Role::MD_ROLE) {
            try {
                $medicalUnitDoctor = MedicalUnitDoctor::where([
                    ['doctor_id', '=', $user->id],
                    ['medical_id', '=', $request->idMedicalUnit]
                ])->firstorFail();
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'error' => true,
                    'message' => 'La unidad medica no esta relacionada al doctor',
                    'code' => 10001,
                    'details' => $e->getMessage()
                ], 404);
            }
        } elseif ($roleId === Role::AS_ROLE) {
            try {
                $medicalUnitDoctor = MedicalUnitDoctor::where([
                    ['doctor_id', '=', $request->idDoctor],
                    ['medical_id', '=', $request->idMedicalUnit]
                ])->firstorFail();
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'error' => true,
                    'message' => 'La unidad medica no esta relacionada al doctor',
                    'code' => 10001,
                    'details' => $e->getMessage()
                ], 404);
            }

        } else {
            return response()->json([
                'error' => true,
                'message' => 'Role not found',
                'code' => 10400,
                'details' => null
            ], 403);
        }

        try {
            $appointment->update([
                'reason' => $request->reason,
                'description' => $request->description,
                'start_time' => $dates['startTime'],
                'end_time' => $dates['endTime'],
            ]);
            if ($appointment->medical_unit_doctor_id !== $medicalUnitDoctor->id) {
                $appointment->medicalUnitDoctor()->associate($medicalUnitDoctor);
                $appointment->save();
            }

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Error al actualizar el registro',
                'code' => 10501,
                'details' => $e->getMessage()
            ], 500);
        }

        return response()->json();

    }

    /**
     * @param Request     $request
     * @param Appointment $appointment
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Request $request, Appointment $appointment): JsonResponse
    {
        $request->validate([
            'reasonId' => 'required|numeric'
        ]);

        $this->authorize('delete', $appointment);

        try {
            $appointment->update([
                'reason_deleted_type' => $request->get('reasonId')
            ]);
            $appointment->delete();

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Error al eliminar la cita',
                'code' => 10501,
                'details' => $e->getMessage()
            ], 500);
        }

        return response()->json();
    }

    /**
     * @return JsonResponse
     */
    public function getByReasonDelete(): JsonResponse
    {
        $reasons = Attribute::where('attribute_id', '=', 79)->get(['id', 'name']);

        return response()->json($reasons);
    }

    /**
     * Format dates to appointment
     *
     * @param string $date
     * @param string $startTime
     * @param string $endTime
     *
     * @return array
     */
    private function _formatDateTime(string $date, string $startTime, string $endTime): array
    {
        $formatDate = Carbon::parse($date);
        $formatStartTime = Carbon::parse($startTime);
        $formatEndTime = Carbon::parse($endTime);

        $formatStartTime->setDate($formatDate->year, $formatDate->month, $formatDate->day);
        $formatStartTime->setTime($formatStartTime->hour, $formatStartTime->minute);
        $formatStartTime->setTimezone('UTC');
        $formatEndTime->setDate($formatDate->year, $formatDate->month, $formatDate->day);
        $formatEndTime->setTime($formatEndTime->hour, $formatEndTime->minute, $formatEndTime->second);

        return [
            'startTime' => $formatStartTime,
            'endTime' => $formatEndTime
        ];
    }
}

