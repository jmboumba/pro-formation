<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Secteur;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/admin_dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/admin_formation', [AdminController::class, 'adminFormation']);

    Route::post('/secteurs/store', [AdminController::class, 'addSecteur']);
    Route::get('/secteurs/list', [AdminController::class, 'showSecteurs']);
    Route::get('/secteurs/delete/{id}', [AdminController::class, 'deleteSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/edit/{id}', [AdminController::class, 'showOneSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/add_view', [AdminController::class, 'addSecteurView']);


    Route::get('/users/list', [AdminController::class, 'showUsers']);
    Route::get('/users/edit/{id}', [AdminController::class, 'showUser'])->where('id', '[0-9]+');
    Route::get('/users/changerole/{id}', [AdminController::class, 'changeUserRole'])->where('id', '[0-9]+');


    Route::get('/formations/list', [AdminController::class, 'showFormations']);


    Route::get('/metiers/list', [AdminController::class, 'showMetiers']);



    Route::get('/actu/list', [AdminController::class, 'showActualites']);


    

    

    

});



