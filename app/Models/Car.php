<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_name',
    ];

    // public function bids()
    // {
    //     return $this->hasMany(CarBid::class); // A car can have many bids
    // }

    // public function dealer()
    // {
    //     return $this->belongsTo(User::class, 'dealer_id',); // A car belongs to one dealer (using foreign key 'dealer_id')
    // }

    // public function customer()
    // {
    //     return $this->belongsTo(User::class, 'customer_id'); // A car belongs to one customer (using foreign key 'dealer_id')
    // }
}
