<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\PublicController;
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

// Homepage
Route::get('/',[HomepageController::class, "homepage"])->name('home');

// Announces
Route::get('/announces', [AnnounceController::class, "index"])->name('announces.index');

// Announces Order/Filter

Route::get('/announces/orderAsc', [AnnounceController::class, "timeOrderAsc"])->name('announces.timeOrderAsc');

Route::get('/announces/orderDesc', [AnnounceController::class, "timeOrderDesc"])->name('announces.timeOrderDesc');

Route::get('/announces/orderCategory/{id}', [AnnounceController::class, "categoryOrder"])->name('announces.categoryOrder');

Route::get('/announces/orderCategory/timedesc/{id}', [AnnounceController::class, "timeOrderDescCat"])->name('announces.timeOrderDescCat');

Route::get('/announces/orderCategory/timeasc/{id}', [AnnounceController::class, "timeOrderAscCat"])->name('announces.timeOrderAscCat');

// Announce 
Route::get('/announces/{announce}', [AnnounceController::class, "show"])->name('announces.show');


// Middleware
Route::middleware("auth")->group(function () {
    
    // Announces create session
    Route::get('/announces/livewire/form', [AnnounceController::class, "announcesLivewire"])->name('announces.livewire');

});

// Form di lavora con noi

Route::get('/lavoraConNoi', [PublicController::class, "lavoraConNoi"] ) ->name('lavoraConNoi');