<?php

namespace App\Models;

use App\Traits\DateFormattingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, DateFormattingTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $dates = ['email_verified_at', 'created_at', 'updated_at'];

    public function transaction(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
