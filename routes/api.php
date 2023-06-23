<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('auth-user', [AuthController::class, 'authUser']);

    //Appointments
    Route::get('/appointment', [AppointmentController::class, 'show']);
    Route::get('/appointments', [AppointmentController::class, 'getByDate']);
    Route::get('/appointments/consultation-hours', [AppointmentController::class, 'getConsultationHours']);
    Route::get('/appointments/all-consultation-hours', [AppointmentController::class, 'getAllConsultationHours']);
    Route::get('/appointment/specialists', [AppointmentController::class, 'getSpecialists']);
    Route::post('/appointment', [AppointmentController::class, 'store']);
    Route::put('/appointment/{appointment}', [AppointmentController::class, 'update']);
    Route::delete('/appointment/{appointment}', [AppointmentController::class, 'destroy']);
    Route::get('/appointment/reason-delete/', [AppointmentController::class, 'getByReasonDelete']);

    //Patients
    Route::get('/patient/brief', [PatientController::class, 'showBrief']);
    Route::get('/patients/search', [PatientController::class, 'search']);
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset');;
