<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'unit_price',
        'amount',
        'discount'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the subtotal for the order item.
     *
     * @return float
     */
    public function getSubtotalAttribute()
    {
        return ($this->unit_price * $this->qty) - $this->discount;
    }
}
