<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no',
        'invoice_date',
        'payment_id',
    ];

    protected $casts = [
        'inv_date' => 'datetime',
    ];

    public function invoiceDetails() : HasMany
    {
        return $this->hasMany(InvoiceDetail::class);
    }

    public function payment() : BelongsTo
    {
        return $this->belongsTo(InvoiceDetail::class);
    }
}
