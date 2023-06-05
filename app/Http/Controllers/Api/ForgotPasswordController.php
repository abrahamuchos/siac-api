<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Send email to forgot password process
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function forgotPassword(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json([
                'status' => __($status)
            ])
            : response()->json([
                'message' => 'Email not valid'
            ], 422);
    }


    /**
     * Change password
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function resetPassword(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|confirmed|min:6|max:50',
        ]);


        $status = Password::reset(
            $request->only('email','password', 'password_confirmation', 'token'),
            function ($user) use ($request){
                $user->forceFill([
                   'password'=> Hash::make($request->password)
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if($status == Password::PASSWORD_RESET){
            return response()->json([
                'message' => 'Your password was updated'
            ]);

        }else{
            return response()->json([
                'message' => 'Your password was not updated',
                'error' => [
                    'status' => __($status)
                ]
            ], 500);
        }
    }


}
