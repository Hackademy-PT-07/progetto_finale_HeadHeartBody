<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;

use App\Http\Controllers\AnnounceController;

use App\Http\Controllers\RevisorController;

use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\GoogleController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AdminController;


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

// Homepage filter for category
Route::get('/homepage/filter/{category}', [HomepageController::class, "announceCategorySearch"])->name('hp.announces.category');

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
    Route::post('/lavoraConNoi/save', [ContactController::class , 'save']) -> name('LavoraConNoi.save');

});

// Middleware revisor
route::middleware("revisor")->group(function () {

    // Home revisor
    Route::get("/revisor/home", [RevisorController::class, "index"])->name("revisor.index");

    Route::get("/revisor/revised", [RevisorController::class, "revisedAnnounces"])->name("revisor.revised");

    // Announces accept
    Route::patch("/accept/announce/{announce}", [RevisorController::class, "acceptAnnounce"])->name("revisor.accept_announce");

    // Annunce reject
    Route::patch("/reject/announce/{announce}", [RevisorController::class, "rejectAnnounce"])->name("revisor.reject_announce");

    // Annunce revised again
    Route::patch("/revised/announces/{announce}", [RevisorController::class, "revisedAnnounceAgain"])->name("revisor.announce_revised");
});

// Revisor request accept
Route::get('/revisor/request/{user}', [RevisorController::class, "acceptRequest"])->name("revisor.acceptRequest");

// Socialite
Route::get("/auth/google", [GoogleController::class, "loginUsingGoogle"])->name("google.login");

Route::get("/auth/google/callback", [GoogleController::class, "callbackFromGoogle"])->name("google.callback");

// Cambio Lingua
Route::post("/language/{lang}", [HomepageController::class, "setLanguage"])->name("setLocale");

// Admin panel
Route::get("/admin/panel", [AdminController::class, "panel"])->middleware("admin")->name("admin.panel");