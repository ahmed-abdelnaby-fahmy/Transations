<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;

trait JsonResponse
{
    /**
     * Get the error messages for the defined validation rules.*
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return array
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => true
        ], 422));
    }
}
