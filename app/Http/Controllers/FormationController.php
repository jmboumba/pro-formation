<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;

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

        return redirect()->back()->with('message', 'Formation added Successfully');
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
}
