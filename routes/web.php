<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServeurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CuisinierController;
use App\Http\Controllers\CaissierController;
use App\Http\Controllers\LivreurController;



Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
})->name('app_home');


Route::get('home/about', function () {
    return view('home.about');
})->name('app_about');


// ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('app_admin');



// SERVEUR
Route::get('/serveur/commandes', [ServeurController::class, 'commandes'])->name('app_serveur');

// CLIENT
Route::get('/client/menu', [ClientController::class, 'menu'])->name('app_client_menu');
Route::get('/client/avis', [ClientController::class, 'avis'])->name('app_client_avis');

// CUISINIER
Route::get('/cuisinier/preparations', [CuisinierController::class, 'preparations'])->name('app_cuisinier');

// CAISSIER
Route::get('/caissier/paiements', [CaissierController::class, 'paiements'])->name('app_caissier');
// LIVREUR
Route::get('/livreur/livraisons', [LivreurController::class, 'livraisons'])->name('app_livreur');
