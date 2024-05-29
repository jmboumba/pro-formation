<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;

class MetierController extends Controller
{
    //
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
}
