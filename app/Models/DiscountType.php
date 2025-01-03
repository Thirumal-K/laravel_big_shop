<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountType extends Model
{
    use HasFactory;
    protected $fillable=[
        'start_date',
        'end_date',
        'type',
        'never_expired'
    ];
}
