<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('index1');
});





Route::get('dashboard', function () {
    return view('index1');
})->name('dashboard');

Route::resource('subjects', SubjectController::class);
