<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    Route::get('/show_categorie', [CategorieController::class, 'showCategorie']);
    Route::post('/add_categorie', [CategorieController::class, 'storeCategorie']);
    Route::get('/delete_categorie/{id}', [CategorieController::class, 'deleteCategorie'])->where('id', '[0-9]+');
});



Route::get('/test', function()
{
   return View::make('admin.dashboard');
});

Route::get('/t', function()
{
   return View::make('test');
});
Route::get('/users/list', function()
{
   $users = user::All();
   return View::make('admin.users.userList', compact('users'));
});

Route::get('/actu/list', function()
{
   return View::make('admin.actu.actuList');
});

Route::get('/formations/list', function()
{
   return View::make('admin.formations.formationList');
});

Route::get('/metiers/list', function()
{
   return View::make('admin.metiers.metierList');
});

Route::get('/secteurs/list', function()
{
   return View::make('admin.secteurs.secteurList');
});

Route::get('/secteurs/add_view', function()
{
   return View::make('admin.secteurs.add');
});

Route::get('/users/{name}', function(){
   $user = User::where('name', 'like', '%' . $name . '%')->get();
   return redirect()->back()->with('message', $user);
});

Route::get('/users/edit/{id}', [AdminController::class, 'showUser'])->where('id', '[0-9]+');

Route::get('/users/changerole/{id}', [AdminController::class, 'changeUserRole'])->where('id', '[0-9]+');