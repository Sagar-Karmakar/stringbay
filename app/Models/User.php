<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_dealer_car', 'dealer_id', 'car_id');
    }

    public function selectedCars()
    {
        return $this->belongsToMany(Car::class, 'car_dealer_car', 'dealer_id', 'car_id');
    }


    public function carRequests()
    {
        return $this->belongsToMany(Car::class, 'car_customer_requests', 'customer_id', 'car_id');
    }


}
