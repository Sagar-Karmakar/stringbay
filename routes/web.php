<?php

use App\Http\Controllers\CarDealerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //car data work
    Route::get('/car-dealer/notification', [CarDealerController::class, 'notification'])->name('car_dealer.notification');
    Route::get('/car-dealer/select-cars', [CarDealerController::class, 'selectCars'])->name('car_dealer.select_cars');
    Route::post('/car-dealer/save-selected-cars', [CarDealerController::class, 'saveSelectedCars'])->name('car_dealer.save_selected_cars');

    Route::get('/customer/request-car', [CustomerController::class, 'requestCar'])->name('customer.request_car');
    Route::post('/customer/save-car-request/{car}', [CustomerController::class, 'saveCarRequest'])->name('customer.save_car_request');
});

require __DIR__.'/auth.php';
