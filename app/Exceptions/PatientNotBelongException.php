<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class PatientNotBelongException extends Exception
{
    protected $code = 403;

    /**
     * @param           $request
     *
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return new JsonResponse([
            'error' => true,
            'message' => 'Patient not belong to user'
        ], $this->code);
    }
}
