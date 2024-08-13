<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('home');
});

//Réservation
Route::prefix("/reservation")->name("reservation")->group(function() {
    Route::get("/", function () {
        return view("reservation");
    });
    Route::post('/add', [ReservationController::class, "create"])->name(".add");
});
