<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarDealerController extends Controller
{
    public function selectCars()
    {
        $dealer = User::findorfail(Auth::user()->id);
        $selectedCars = $dealer->selectedCars()->pluck('car_id')->toArray();
        $allCars = Car::all();

        return view('car_dealer.select_cars', compact('allCars', 'selectedCars'));
    }

    public function saveSelectedCars(Request $request)
    {
        $dealer = User::findorfail(Auth::user()->id);
        $dealer->cars()->sync($request->input('car_ids'));
        // dd(Auth::user()->id);
        return redirect()->back()->with('success', 'Cars selected successfully!');
    }


    public function notification()
    {
        $dealer = User::findorfail(Auth::user()->id);
        $notifications = $dealer->notifications()->where('type', 'App\Notifications\CarRequested')->get();
        return view('car_dealer.notification', compact('notifications'));
    }

    public function markNotificationsAsRead()
    {
        $dealer = User::findorfail(Auth::user()->id);
        $dealer->unreadNotifications->markAsRead();
        return redirect()->route('car_dealer.dashboard')->with('success', 'Notifications marked as read.');
    }


}
