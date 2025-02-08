<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Validator;

abstract class Controller extends BaseController
{
    protected function returnJson(
        mixed $content = [],
        int $code = 200,
        string $message = 'Success'
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'content' => $content,
            'success' => $code == 200,
        ], $code);
    }

    protected function validationFail(Validator $validator): JsonResponse
    {
        return $this->returnJson(
            $validator->errors(),
            500,
            message: 'Mohon isi data dengan benar!',
        );
    }
}
