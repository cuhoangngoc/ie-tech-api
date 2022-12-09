<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'plan_id',
        'user_id',
        'duration',
        'payment_method',
        'status',
    ];

    public $timestamps = false;
}
