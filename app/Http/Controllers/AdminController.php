<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;
use App\Models\Actualite;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.dash');
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

        if($user->user_role == 0){
            $user->user_role = 1;
        }else{
            $user->user_role = 0;
        }

        $user->save();

        return redirect()->back()->with('message', 'User role successfully update');
    }




    //Gestion des actualités
    public function showActualites(){
        $actualites = Actualite::All();
        return view('admin.actu.actuList', compact('actualites'));
    }

    public function addActuView(){
        
        $formations = Formation::All();
        return view('admin.actu.add', compact('formations'));
    }

    public function addActu(Request $request){
        $actualite = new Actualite;

        $actualite->titre = $request->titre;
        $actualite->formation_id = $request->formation_id;
        $actualite->contenu = $request->contenu;
        
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images/actus'), $imageName);

        $actualite->image = $imageName;

        $actualite->save();

        return redirect()->back()->with('message', 'Actualité ajoutée avec succès');

    }

    public function showOneActu($id){
        $actualite = Actualite::find($id);

        return view('admin.actu.edit', compact('actualite'));
    }




    //Gestion des inscriptions




}
