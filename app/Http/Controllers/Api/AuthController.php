<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     *
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Email o contraseña son incorrectos, por favor intente de nuevo'
            ], 401);
        }

        /** @var User $user */
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;

        return response()->json([
            'user' => [
                'id' => $user->id,
                'firstName' => $user->first_name,
                'secondName' => $user->second_name,
                'firstSurname' => $user->first_surname,
                'secondSurname' => $user->second_surname,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'role' => [
                    'id' => $user->roles()->first()->id,
                    'name' => $user->roles()->first()->name
                ],
            ],

            'token' => $token
        ]);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json();
    }

    /**
     *
     * @return JsonResponse
     */
    public function authUser(): JsonResponse
    {
        /** @var User $user */
        $user = User::with(['roles', 'gradeType', 'doctors'])
            ->where('id', Auth::user()->id)
            ->first();
        /**@var  int $roleId */
        $roleId = $user->roles->first()->id;

        if($roleId === Role::ADMIN_ROLE ){
            //Admin
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'firstName' => $user->first_name,
                    'firstSurname' => $user->first_surname,
                    'avatar' => $user->avatar,
                    'role' => [
                        'id' => $user->roles->first()->id,
                        'name' => $user->roles->first()->name,
                    ]
                ]
            ]);
        }else if($roleId === Role::UM_ROLE){
            //Medical Unit (MD)
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'firstName' => $user->first_name,
                    'avatar' => $user->avatar,
                    'role' => [
                        'id' => $user->roles->first()->id,
                        'name' => $user->roles->first()->name,
                    ]
                ]
            ]);
        }else if ($roleId === Role::MD_ROLE){
            // Doctor (Md)
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'gradeType' => $user->gradeType->value,
                    'firstName' => $user->first_name,
                    'firstSurname' => $user->first_surname,
                    'avatar' => $user->avatar,
                    'medicalUnit' => [
                        'id' => $user->doctors->first()->medical_id,
                        'name' =>  $user->doctors->first()->medicalUnit()->first()->first_name
                    ],
                    'role' => [
                        'id' => $user->roles->first()->id,
                        'name' => $user->roles->first()->name,
                    ]
                ]
            ]);
        }else if ($roleId === Role::AS_ROLE){
            // Assistant (As)
            $medicalUnit = DB::select('select distinct u3.id, u3.first_name
                     from users u
                    join assistant_doctors ad on u.id = ad.assistant_id
                    join users u2 on ad.doctor_id = u2.id
                    join medical_unit_doctors mud on u2.id = mud.doctor_id
                    join users u3 on mud.medical_id = u3.id
                    where u.id = ?;',
                [$user->id]);
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'gradeType' => $user->gradeType->value,
                    'firstName' => $user->first_name,
                    'firstSurname' => $user->first_surname,
                    'avatar' => $user->avatar,
                    'medicalUnit' => [
                        'id' => $medicalUnit[0]->id,
                        'name' => $medicalUnit[0]->first_name
                    ],
                    'role' => [
                        'id' => $user->roles->first()->id,
                        'name' => $user->roles->first()->name,
                    ]
                ]
            ]);

        }else{
           return response()->json([
               'error' => true,
               'message' => 'Acceso no autorizado'
            ], 401);
        }

    }


}
