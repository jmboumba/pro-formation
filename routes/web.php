<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Secteur;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('layouts.admin.admin');
});


Route::get('/', [HomeController::class, 'index']);

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
    Route::get('/secteurs/edit/{id}', [AdminController::class, 'showOneSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/update/{id}', [AdminController::class, 'updateSecteur'])->where('id', '[0-9]+');


    Route::get('/users/list', [AdminController::class, 'showUsers']);
    Route::get('/users/edit/{id}', [AdminController::class, 'showUser'])->where('id', '[0-9]+');
    Route::get('/users/changerole/{id}', [AdminController::class, 'changeUserRole'])->where('id', '[0-9]+');


    Route::get('/formations/list', [AdminController::class, 'showFormations']);
    Route::get('/formations/add_view', [AdminController::class, 'addFormationView']);
    Route::post('/formations/store', [AdminController::class, 'addFormation']);
    Route::get('/formations/edit/{id}', [AdminController::class, 'showOneFormation'])->where('id', '[0-9]+');




    Route::get('/metiers/list', [AdminController::class, 'showMetiers']);
    Route::get('/metiers/add_view', [AdminController::class, 'addMetierView']);
    Route::post('/metiers/store', [AdminController::class, 'addMetier']);
    Route::get('/metiers/edit/{id}', [AdminController::class, 'showOneMetier'])->where('id', '[0-9]+');



    Route::get('/actu/list', [AdminController::class, 'showActualites']);
    Route::get('/actu/add/view', [AdminController::class, 'addActuView']);
    Route::post('/actu/store', [AdminController::class, 'addActu']);
    Route::get('/actu/edit/{id}', [AdminController::class, 'showOneActu'])->where('id', '[0-9]+');

});

