<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'due_on', 'vat', 'is_vat', 'customer_id', 'admin_id'];
    protected $appends = ['paid_amount'];

    protected static function boot()
    {
        static::creating(function ($transaction) {
            if (auth('admin')->check())
                $transaction->admin_id = auth('admin')->user()->id;
        });
        static::created(function ($transaction) {
            $transaction->update_status();
        });
        static::retrieved(function ($transaction) {
            $transaction->update_status();
        });
        parent::boot();
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function update_status()
    {
        $old_status = $this->status;
        if ($this->paid_amount >= $this->amount)
            $this->status = 'paid';
        else
            $this->status = $this->due_on <= Carbon::now()->format('Y-m-d') ? 'Overdue' : 'Outstanding';
        if ($this->status != $old_status)
            $this->save();
    }


    public function getPaidAmountAttribute()
    {
        return $this->payments()->sum('amount');
    }

    public function scopeFilter($query, $customer_id = null)
    {
        return $query->where('customer_id', ($customer_id ? $customer_id : auth()->user()->id));
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
