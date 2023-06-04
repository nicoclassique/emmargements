<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/participants', 'ParticipantController@index')->name('participants.index');
Route::get('/participants/create', 'ParticipantController@create')->name('participants.create');
Route::post('/participants', 'ParticipantController@store')->name('participants.store'); */

/* Route::get('/participants', [ParticipantController::class, 'index']);
Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store'); */


Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');
