<?php

namespace App\Http\Requests\Admin;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
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
            'amount' => ['required', 'numeric'],
            'due_on' => ['required', 'date','after_or_equal:'.Carbon::now()->format('Y-m-d')],
            'vat' => ['required', 'numeric'],
            'is_vat' => ['boolean'],
            'customer_id' => ['required', 'exists:customers,id'],
        ];
    }
}
