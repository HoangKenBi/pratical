<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
});

//Route::get('/students/{student}', 'App\Http\Controllers\StudentController@show')->name('students.show');
