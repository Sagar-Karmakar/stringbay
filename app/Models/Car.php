<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function dealers()
    {
        return $this->belongsToMany(User::class, 'car_dealer_car', 'car_id', 'dealer_id');
    }
}
