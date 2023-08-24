<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\LavoraConNoiController;
/*
use App\Http\Controllers\PublicController;
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
Route::get('/', [HomepageController::class, "homepage"])->name('home');

// Announces
Route::get('/announces', [AnnounceController::class, "index"])->name('announces.index');

// Announces Order/Filter
Route::get('/filter/announces', [AnnounceController::class, 'filterAnnounces'])->name('announces.filter');

// Announce 
Route::get('/announces/{announce}', [AnnounceController::class, "show"])->name('announces.show');


// Middleware auth
Route::middleware("auth")->group(function () {

    // Announces create session
    Route::get('/announces/livewire/form', [AnnounceController::class, "announcesLivewire"])->name('announces.livewire');

    // Become revisor request
    Route::get('/revisor/request', [RevisorController::class, "revisorRequest"])->name("revisor.request");
});

// Middleware revisor
route::middleware("revisor")->group(function () {

    // Home revisor
    Route::get("/revisor/home", [RevisorController::class, "index"])->name("revisor.index");

    // Announces accept
    Route::patch("/accetta/annuncio/{announce}", [RevisorController::class, "acceptAnnounce"])->name("revisor.accept_announce");

    // Annunce Reject
    Route::patch("/Rifiuta/annuncio/{announce}", [RevisorController::class, "rejectAnnounce"])->name("revisor.reject_announce");
});

// Revisor request accept
Route::get('/revisor/request/{user}', [RevisorController::class, "acceptRequest"])->name("revisor.acceptRequest");
