<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'image', 'clientName', 'location', 'des', 'content', 'email', 'phone'
    ];

    public $timestamps = false;
}
