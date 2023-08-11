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

Route::get('/announces', [AnnounceController::class, "index"])->name('announces.index');

Route::get('/announces/orderAsc', [AnnounceController::class, "timeOrderAsc"])->name('announces.timeOrderAsc');

Route::get('/announces/orderDesc', [AnnounceController::class, "timeOrderDesc"])->name('announces.timeOrderDesc');

Route::get('/announces/orderCategory/{id}', [AnnounceController::class, "categoryOrder"])->name('announces.categoryOrder');

Route::get('/announces/{announce}', [AnnounceController::class, "show"])->name('announces.show');



Route::middleware("auth")->group(function () {

    Route::get('/announces/livewire/form', [AnnounceController::class, "announcementsLivewire"])->name('announces.livewire');

});