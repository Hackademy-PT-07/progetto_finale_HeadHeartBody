<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AnnounceController;
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

Route::get('/',[HomepageController::class, "homepage"])->name('home');

Route::get('/announces/{announce}', [AnnounceController::class, "show"])->name('announces.show');

Route::get('/announces', [AnnounceController::class, "index"])->name('announces.index');

Route::get('/announces/form', [AnnounceController::class, "announcementsLivewire"])->name('announces.form');


