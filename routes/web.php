<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Secteur;

Route::get('/welcome', function () {
    return view('welcome');
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

    Route::post('/secteur/store', [SecteurController::class, 'store']);
    Route::post('/secteur/update/{id}', [SecteurController::class, 'update'])->where('id', '[0-9]+');
    Route::get('/secteur/delete/{id}', [SecteurController::class, 'delete'])->where('id', '[0-9]+');

    Route::get('/secteur/add', [SecteurController::class, 'add']);
    Route::get('/secteur/edit/{id}', [SecteurController::class, 'details'])->where('id', '[0-9]+');
    Route::get('/secteurs/list', [SecteurController::class, 'index']);
    



    Route::get('/users/list', [AdminController::class, 'showUsers']);
    Route::get('/users/edit/{id}', [AdminController::class, 'showUser'])->where('id', '[0-9]+');
    Route::get('/user/update/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->where('id', '[0-9]+');




    Route::get('/formations/list', [FormationController::class, 'showFormations']);
    Route::get('/formations/add_view', [FormationController::class, 'addFormationView']);
    Route::post('/formations/store', [FormationController::class, 'addFormation']);
    Route::get('/formations/edit/{id}', [FormationController::class, 'showOneFormation'])->where('id', '[0-9]+');
    Route::post('/formation/update/{id}', [FormationController::class, 'update'])->where('id', '[0-9]+');
    Route::get('/formation/delete/{id}', [FormationController::class, 'delete'])->where('id', '[0-9]+');


    Route::get('/metiers/list', [MetierController::class, 'showMetiers']);
    Route::get('/metiers/add', [MetierController::class, 'add']);
    Route::post('/metier/store', [MetierController::class, 'store']);
    Route::post('/metier/update/{id}', [MetierController::class, 'update'])->where('id', '[0-9]+');
    Route::get('/metiers/edit/{id}', [MetierController::class, 'showOneMetier'])->where('id', '[0-9]+');
    Route::get('/metier/delete/{id}', [MetierController::class, 'delete'])->where('id', '[0-9]+');



    Route::get('/actu/list', [AdminController::class, 'showActualites']);
    Route::get('/actu/add/view', [AdminController::class, 'addActuView']);
    Route::post('/actu/store', [AdminController::class, 'addActu']);
    Route::get('/actu/edit/{id}', [AdminController::class, 'showOneActu'])->where('id', '[0-9]+');

    Route::post('/panier/{id}', [FormationController::class, 'addToPanier'])->where('id', '[0-9]+');

    Route::get('/panier/show', [HomeController::class, 'showPanier']);
    Route::get('/panier/remove/{id}', [FormationController::class, 'removeFromPanier'])->where('id', '[0-9]+');
});


Route::get('/formations/métier', [MetierController::class, 'searchMetier']);

Route::get('/formations/secteur', [SecteurController::class, 'searchSecteur']);

Route::get('/search/base', [HomeController::class, 'search']);

Route::get('/formations/{id}/details', [FormationController::class, 'formationDetails'])->where('id', '[0-9]+');

Route::get('/about', [HomeController::class, 'About']);

Route::get('/formations/secteur/{id}', [SecteurController::class, 'searchSecteurDetails'])->where('id', '[0-9]+');


Route::get('/formations/metier/{id}', [MetierController::class, 'searchMetierDetails'])->where('id', '[0-9]+');

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/formations', [HomeController::class, 'formations']);

Route::get('/blog', [HomeController::class, 'blog']);


Route::get('/actu/{id}/details', [HomeController::class, 'blogDetails'])->where('id', '[0-9]+');