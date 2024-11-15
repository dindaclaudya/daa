<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'amount',
        'payment_status',
    ];

    /**
     * Get the product associated with the payment.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
