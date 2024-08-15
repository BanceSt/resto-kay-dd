<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name("home");

Route::prefix("/reservation")->name("reservation")->group(function() {
    Route::get("/", function () {
        return view("reservation");
    });
    Route::post('/add', [ReservationController::class, "create"])->name(".add");
});

Route::prefix("/contact")->name("contact")->group(function(){
    Route::get("/", function () {
        return view("contact");
    });

    Route::post("/add", [ContactController::class, "create"])->name(".add");
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//Réservation



require __DIR__.'/auth.php';



