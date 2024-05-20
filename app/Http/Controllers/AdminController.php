<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Secteur;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.dashboard');
    }




    //Gestion des Secteurs
    public function addSecteurView(){
        return view('admin.secteurs.add');
    }

    public function addSecteur(Request $request){
        $secteur = new Secteur;

        $secteur->libelle = $request->libelle;
        $secteur->description = $request->description;

        $secteur->save();

        return redirect()->back()->with('message', 'Secteur Added Successfully');
    }

    public function showSecteurs(){
        $secteurs = Secteur::All();
        return view('admin.secteurs.secteurList', compact('secteurs'));
    }

    public function showOneSecteur($id){
        $secteur = Secteur::find($id);
        return view('admin.secteurs.edit', compact('secteur'));
    }

    public function deleteSecteur($id){
        $secteur = Secteur::find($id);

        $secteur->delete();

        return redirect()->back()->with('message', 'Secteur delete Successfully');
    }




    //Gestion des métiers
    public function showMetiers(){
        return view('admin.metiers.metierList');
    }




    //Gestion des formations
    public function showFormations(){
        return view('admin.formations.formationList');
    }




    //Gestion des Users
    public function showUser($id){
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function showUsers(){
        $users = User::All();
        return view('admin.users.userList', compact('users'));
    }

    public function changeUserRole($id){
        $user = User::find($id);

        if($user->role == 0){
            $user->role = 1;
        }else{
            $user->role = 0;
        }

        $user->save();

        return redirect()->back()->with('message', 'User role successfully update');
    }




    //Gestion des actualités
    public function showActualites(){
        return view('admin.actu.actuList');
    }




    //Gestion des inscriptions




}
