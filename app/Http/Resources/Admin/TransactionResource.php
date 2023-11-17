<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'due_on' => $this->due_on,
            'amount' => $this->amount,
            'status' => $this->status,
            'vat' => $this->vat,
            'is_vat' => $this->is_vat,
            'admin' => new UserResource($this->admin),
            'customer' => new UserResource($this->customer),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
