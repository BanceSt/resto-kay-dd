<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Réservation
Route::prefix("/reservation")->name("reservation")->group(function() {
    Route::get("/", function () {
        return view("reservation");
    });
});
