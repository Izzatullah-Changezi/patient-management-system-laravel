<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/patient', function(){
    return view('pages/patient');
});

Route::get('/patients', function(){
    return view('pages/patient-list');
});

Route::prefix('patients')->group(function(){
    Route::post('/add', [PatientController::class, 'add']);
})->middleware(['auth']);;