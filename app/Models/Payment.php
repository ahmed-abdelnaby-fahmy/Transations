<?php

namespace App\Models;

use App\Traits\DateFormattingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, DateFormattingTrait;

    protected $fillable = ['amount', 'paid_on', 'details', 'transaction_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function transaction(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
