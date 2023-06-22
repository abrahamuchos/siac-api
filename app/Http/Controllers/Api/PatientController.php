<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\PatientNotBelongException;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function search(Request $request): JsonResponse
    {
        // Return if search is empty
        if (!$request->filled('search')) {
            return response()->json([
                'patients' => []
            ]);
        }

        $user = Auth::user();
        $roleId = $user->roles()->first()->id;
        $search = ucfirst($request->search);

        if ($roleId === Role::ADMIN_ROLE) {
            $flatRes = Patient::select(['patients.id', 'first_name', 'first_surname', 'id_document', 'value'])
                ->where('first_name', 'like', $search . '%')
                ->orWhere('first_surname', 'like', $search . '%')
                ->orwhere('id_document', 'like', $search . '%')
                ->join('attributes', 'patients.id_document_type', '=', 'attributes.id')
                ->get();

        } elseif ($roleId === Role::UM_ROLE) {
            $res = $user
                ->medicalUnits()
                ->with([
                    'patients' =>
                        fn($query) => $query->where('first_name', 'like', $search . '%')
                            ->orWhere('first_surname', 'like', $search . '%')
                            ->orWhere('id_document', 'like', $search . '%')
                            ->with('documentType')
                ])
                ->whereHas('patients', fn($query) => $query->where('first_name', 'like', $search . '%')
                    ->orWhere('first_surname', 'like', $search . '%')
                    ->orWhere('id_document', 'like', $search . '%')
                    ->with('documentType')
                )
                ->get()
                ->pluck('patients');
            $flatRes = $res->flatten()->map(function ($item) {
                return [
                    'id' => $item['id'],
                    'firstName' => $item['first_name'],
                    'firstSurname' => $item['first_surname'],
                    'documentType' => $item->documentType->value,
                    'documentId' => $item['id_document']
                ];
            });

        } elseif ($roleId === Role::MD_ROLE) {
            $res = $user
                ->doctors()
                ->with([
                    'patients' =>
                        fn($query) => $query->where('first_name', 'like', $search . '%')
                            ->orWhere('first_surname', 'like', $search . '%')
                            ->orWhere('id_document', 'like', $search . '%')
                            ->with('documentType')
                ])
                ->whereHas('patients', fn($query) => $query->where('first_name', 'like', $search . '%')
                    ->orWhere('first_surname', 'like', $search . '%')
                    ->orWhere('id_document', 'like', $search . '%')
                    ->with('documentType')
                )
                ->get()
                ->pluck('patients');

            $flatRes = $res->flatten()->map(function ($item) {
                return [
                    'id' => $item['id'],
                    'firstName' => $item['first_name'],
                    'firstSurname' => $item['first_surname'],
                    'documentType' => $item->documentType->value,
                    'documentId' => $item['id_document']
                ];
            });

        } elseif ($roleId === Role::AS_ROLE) {
            $conditions = [
                'userId' => $user->id,
                'firstName' => $search . '%',
                'firstSurname' => $search . '%',
                'idDocument' => $search . '%',
            ];
            $sql = "select p.id, p.first_name as \"firstName\", p.first_surname as \"firstSurname\", a.value as \"documentType\", p.id_document as \"documentId\"
                    from users u
                        join assistant_doctors ad on u.id = ad.assistant_id
                        join users u2 on ad.doctor_id = u2.id
                        join medical_unit_doctors mud on u2.id = mud.doctor_id
                        join doctor_patient dp on mud.id = dp.medical_unit_doctor_id
                        join patients p on dp.patient_id = p.id
                        join attributes a on p.id_document_type = a.id
                    where u.id = :userId
                    and (p.first_name like :firstName
                    or p.first_surname like :firstSurname
                    or p.id_document like :idDocument);";
            $flatRes = DB::select($sql, $conditions);

        } else {
            return response()->json([]);
        }


        return response()->json([
            'patients' => $flatRes
        ]);
    }


    /**
     * Show patient by id
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function showBrief(Request $request): JsonResponse
    {
        $request->validate([
            'id' => 'required'
        ]);
        /**
         * @var int $id - Patient id
         */
        $id = $request->input('id');

        try {
            $this->_hasAccessToPatient($id, Auth::user());

            $patient = Patient::findOrFail($id);

        } catch (PatientNotBelongException $e) {
            return $e->render();

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 404);
        }

        return response()->json([
            'id' => $patient->id,
            'historyNumber' => $patient->history_number,
            'firstName' => $patient->first_name,
            'firstSurname' => $patient->first_surname,
            'idDocument' => $patient->id_document
        ]);
    }

    /**
     * Valid if the patient belongs to the user
     * @throws PatientNotBelongException
     */
    private function _hasAccessToPatient(int $id, User $user): void
    {
        $roleId = $user->roles()->first()->id;

        if ($roleId === Role::ADMIN_ROLE) {
            return;

        } elseif ($roleId === Role::UM_ROLE) {
            $validate = $user->medicalUnits()
                ->whereHas('patients', function ($q) use ($id) {
                    return $q->where('id', '=', $id);
                })
                ->get();
            $hasPatient = (bool)$validate->count();

        } elseif ($roleId === Role::MD_ROLE) {
            $validate = $user
                ->doctors()
                ->whereHas('patients', function ($q) use ($id) {
                    $q->where('id', '=', $id);
                })
                ->get();
            $hasPatient = (bool)$validate->count();

        } elseif ($roleId === Role::AS_ROLE) {
            $conditions = [
                'userId' => $user->id,
                'patientId' => $id
            ];
            $sql = 'select count(ad.id)
                    from users u
                    join assistant_doctors ad on u.id = ad.assistant_id
                    join users u2 on ad.doctor_id = u2.id
                    join medical_unit_doctors mud on u2.id = mud.doctor_id
                    join  doctor_patient dp on mud.id = dp.medical_unit_doctor_id
                    join patients p on dp.patient_id = p.id
                where u.id = :userId
                and p.id = :patientId;';
            $validate = DB::select($sql, $conditions);
            $hasPatient = (bool)$validate[0]->count;

        } else {
            throw new PatientNotBelongException();
        }

        if (!$hasPatient) {
            throw new PatientNotBelongException();
        }
    }


}

