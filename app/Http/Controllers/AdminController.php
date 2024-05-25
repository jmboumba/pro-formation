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




    //Gestion des Secteurs
    public function addSecteurView(){
        return view('admin.secteurs.add');
    }

    public function addSecteur(Request $request){
        $secteur = new Secteur;

        $secteur->libelle = $request->libelle;
        $secteur->description = $request->description;

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images/secteurs'), $imageName);

        $secteur->image = $imageName;

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

    public function updateSecteur(Request $request, $id){
        $secteur = Secteur::find($id);

        if(isset($request->libelle) or isset($request->description))
        {
            if($request->libelle != $secteur->libelle){
                $secteur->libelle = $request->libelle;
            }
            if($request->description != $secteur->libelle){
                $secteur->libelle = $request->libelle;
            }
        }
        elseif(isset($request->image)){
            $secteur->image = $request->image;
        }

        $secteur->save();

        return redirect()->with('message', 'Secteur modifié avec succès');
    }




    //Gestion des métiers
    public function showMetiers(){
        $metiers = Metier::All();
        $secteurs = Secteur::All();
        return view('admin.metiers.metierList', compact('metiers', 'secteurs'));
    }

    public function addMetierView(){
        $secteurs = Secteur::All();
        return view('admin.metiers.add', compact('secteurs'));
    }

    public function addMetier(Request $request){
        $metier = new Metier;

        $metier->libelle = $request->libelle;
        $metier->description = $request->description;
        $metier->secteur_id = $request->secteur_id;

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images/metiers'), $imageName);

        $metier->image = $imageName;

        $metier->save();

        return redirect()->back()->with('message', 'Métier added Successfully');
    }

    public function showOneMetier($id){
        $metier = Metier::find($id);
        $secteur = Secteur::find($metier->secteur_id);
        return view('admin.metiers.edit', compact('metier'));
    }



    //Gestion des formations
    public function showFormations(){
        $formations = Formation::All();
        $metiers = Metier::All();
        return view('admin.formations.formationList', compact('formations', 'metiers'));
    }

    public function addFormationView(){
        $metiers = Metier::All();
        return view('admin.formations.add', compact('metiers'));
    }

    public function addFormation(Request $request){
        $formation = new Formation;

        $formation->titre = $request->titre;
        $formation->metier_id = $request->metier_id;
        $formation->objectifs = $request->objectifs;
        $formation->programme = $request->programme;
        $formation->niveau = $request->niveau;
        $formation->duree = $request->duree;
        $formation->price = $request->price;

        $videoName = time().'.'.$request->video->extension();

        // Public Folder
        $request->video->move(public_path('images/formations'), $videoName);

        $formation->video = $videoName;
        
        
        $formation->save();

        return redirect()->back()->with('message', 'Formation added Successfully');
    }

    public function showOneFormation($id){
        $formation = Formation::find($id);
        $metier = Metier::find($formation->metier_id);
        $metiers = Metier::where('id', '!=', $formation->metier_id);
        return view('admin.formations.edit', compact('formation', 'metier', 'metiers'));
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
