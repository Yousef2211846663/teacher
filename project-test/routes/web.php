<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('index1');
});





Route::get('dashboard', function () {
    return view('index1');
})->name('dashboard');

Route::resource('subjects', SubjectController::class);

Route::resource('teachers',TeacherController::class); // we use this "PLUR " teacherS when doing ->route
                                                                   // but in return view ( we use the path teacher/index example)
