<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Formation;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Actualite;
use App\Models\Panier;


class FormationController extends Controller
{
    //
    //Gestion des formations
    public function showFormations(){
        $formations = Formation::All();
        $metiers = Metier::All();
        return view('admin.formations.formationList', compact('formations', 'metiers'));
    }

    public function addFormationView(){
        $metiers = Metier::All();
        $secteurs = Secteur::All();
        return view('admin.formations.add', compact('metiers', 'secteurs'));
    }

    public function addFormation(Request $request){
        $formation = new Formation;
        $metier = Metier::find($request->metier_id);

        $formation->titre = $request->titre;
        $formation->metier_id = $request->metier_id;
        $formation->objectifs = $request->objectifs;
        $formation->programme = $request->programme;
        $formation->niveau = $request->niveau;
        $formation->duree = $request->duree;
        $formation->price = $request->price;
        $formation->secteur_id = $metier->secteur_id;

        $videoName = time().'.'.$request->video->extension();

        // Public Folder
        $request->video->move(public_path('images/formations'), $videoName);

        $formation->image = $videoName;
        
        
        $formation->save();

        return redirect()->back()->with('message', 'Formation ajoutée avec succès.');
    }

    public function update(Request $request, $id){
        $formation = Formation::find($id);
        $secteur = Secteur::find($request->metier_id);

        $formation->secteur_id = $secteur->id;

        $formation->metier_id = $request->metier_id;
        
        $formation->titre = $request->titre;
        $formation->objectifs = $request->objectifs;
        $formation->programme = $request->programme;
        $formation->niveau = $request->niveau;
        $formation->duree = $request->duree;
        $formation->price = $request->price;

        if($request->image){
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images/formations'), $imageName);

            $formation->image = $imageName;
        }

        $formation->save();

        return redirect()->back()->with('message', 'Formation modifié avec succès');
    }


    public function delete($id){
        $formation = Formation::find($id);

        $formation->delete();

        return redirect()->back()->with('message', 'Formation supprimé avec succès');
    }

    

    public function showOneFormation($id){
        $formation = Formation::find($id);
        $metier = Metier::find($formation->metier_id);
        $metiers = Metier::where('id', '!=', $formation->metier_id);
        return view('admin.formations.edit', compact('formation', 'metier', 'metiers'));
    }

    public function formationDetails($id){

        $formation = Formation::find($id);
        $metier = Metier::find($formation->metier_id);
        $secteur = Secteur::find($metier->secteur_id);

        $secteurs = Secteur::All();

        return view('user.single', compact('formation', 'metier', 'secteur', 'secteurs'));
    }

    public function addToPanier(Request $request, $id){
        $debut = $request->debut;
        $user = Auth::user();
        $formation = Formation::find($id);

        $panier = new Panier;

        $panier->name = $user->name;
        $panier->firstname = $user->firstname;
        $panier->email = $user->email;
        $panier->phone = $user->phone;
        $panier->titre = $formation->titre;
        $panier->price = $formation->price;
        $panier->debut = $debut;

        $panier->save();

        return redirect()->back()->with('message', 'Formation correctement ajoutée au panier');
    }

    public function removeFromPanier($id){
        $panier = Panier::find($id);

        $panier->delete();

        return redirect()->back()->with('message', 'Formation correctement supprimée');
    }
}
