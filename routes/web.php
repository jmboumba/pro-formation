<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\FormationController;
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
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/admin_dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/admin_formation', [AdminController::class, 'adminFormation']);

    Route::post('/secteurs/store', [SecteurController::class, 'addSecteur']);
    Route::get('/secteurs/list', [SecteurController::class, 'showSecteurs']);
    Route::get('/secteurs/delete/{id}', [SecteurController::class, 'deleteSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/edit/{id}', [SecteurController::class, 'showOneSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/add_view', [SecteurController::class, 'addSecteurView']);
    Route::get('/secteurs/edit/{id}', [SecteurController::class, 'showOneSecteur'])->where('id', '[0-9]+');
    Route::get('/secteurs/update/{id}', [SecteurController::class, 'updateSecteur'])->where('id', '[0-9]+');


    Route::get('/users/list', [AdminController::class, 'showUsers']);
    Route::get('/users/edit/{id}', [AdminController::class, 'showUser'])->where('id', '[0-9]+');
    Route::get('/users/changerole/{id}', [AdminController::class, 'changeUserRole'])->where('id', '[0-9]+');


    Route::get('/formations/list', [FormationController::class, 'showFormations']);
    Route::get('/formations/add_view', [FormationController::class, 'addFormationView']);
    Route::post('/formations/store', [FormationController::class, 'addFormation']);
    Route::get('/formations/edit/{id}', [FormationController::class, 'showOneFormation'])->where('id', '[0-9]+');




    Route::get('/metiers/list', [MetierController::class, 'showMetiers']);
    Route::get('/metiers/add_view', [MetierController::class, 'addMetierView']);
    Route::post('/metiers/store', [MetierController::class, 'addMetier']);
    Route::get('/metiers/edit/{id}', [MetierController::class, 'showOneMetier'])->where('id', '[0-9]+');



    Route::get('/actu/list', [AdminController::class, 'showActualites']);
    Route::get('/actu/add/view', [AdminController::class, 'addActuView']);
    Route::post('/actu/store', [AdminController::class, 'addActu']);
    Route::get('/actu/edit/{id}', [AdminController::class, 'showOneActu'])->where('id', '[0-9]+');

    Route::post('/panier/{id}', [HomeController::class, 'addToPanier'])->where('id', '[0-9]+');

    Route::get('/panier/show', [HomeController::class, 'showPanier']);
    Route::get('/panier/remove/{id}', [HomeController::class, 'removeFromPanier'])->where('id', '[0-9]+');
});


Route::get('/formations/métier', [HomeController::class, 'searchMetier']);

Route::get('/formations/secteur', [HomeController::class, 'searchSecteur']);

Route::get('/search/base', [HomeController::class, 'search']);

Route::get('/formations/{id}/details', [FormationController::class, 'formationDetails'])->where('id', '[0-9]+');

Route::get('/about', [HomeController::class, 'About']);

Route::get('/formations/secteur/{id}', [HomeController::class, 'searchSecteurDetails'])->where('id', '[0-9]+');


Route::get('/formations/metier/{id}', [HomeController::class, 'searchMetierDetails'])->where('id', '[0-9]+');

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/formations', [HomeController::class, 'formations']);

Route::get('/blog', [HomeController::class, 'blog']);


Route::get('/actu/{id}/details', [HomeController::class, 'blogDetails'])->where('id', '[0-9]+');