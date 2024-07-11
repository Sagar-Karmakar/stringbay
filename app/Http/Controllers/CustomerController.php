<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Notifications\CarRequested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class CustomerController extends Controller
{
    public function requestCar()
    {
        $cars = Car::all();
        return view('request_car', compact('cars'));
    }

// Inside the saveCarRequest method
public function saveCarRequest(Request $request, Car $car)
    {
        $customer = User::findorfail(Auth::user()->id);

        // Get all dealers who selected this car
        $dealers = User::whereHas('selectedCars', function ($query) use ($car) {
            $query->where('car_id', $car->id);
        })->get();

        // Send notification to each dealer
        foreach ($dealers as $dealer) {
            $dealer->notify(new CarRequested($car, $customer));
        }

        // Save the car request in pivot table
        $customer->carRequests()->attach($car->id);

        return redirect()->back()->with('success', 'Car requested successfully!');
    }

    public function requestInquiry(Request $request, Car $car)
    {
        $customer = $request->user();

        // Notify car dealer(s) who have selected this car
        $car->dealers()->each(function (User $dealer) use ($car, $customer) {
            $dealer->notify(new CarRequested($car, $customer));
        });

        return redirect()->back()->with('success', 'Inquiry request sent successfully!');
    }
}

