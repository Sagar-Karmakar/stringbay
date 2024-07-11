<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBid extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'customer_id',
    ];

}
