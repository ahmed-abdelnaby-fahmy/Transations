<?php

namespace App\Http\Requests\Api\Admin;

use App\Traits\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    use JsonResponse;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:admins,email'],
            'password' => ['required', 'min:6'],
        ];
    }
}
