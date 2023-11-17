<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;

trait FormatResponse
{
    public function success($data, $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => true,
            'data' => $data
        ], $code);
    }

    public function failed($msg, $code = 422): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => false,
            'msg' => $msg
        ], $code);
    }
}
