<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;

class MetierController extends Controller
{
    //
    public function add(){
        $secteurs = Secteur::All();
        return view('admin.metiers.add', compact('secteurs'));
    }


    public function store(Request $request){
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

        return redirect()->back()->with('message', 'Métier ajouté avec succès');
    }


    public function update(Request $request, $id){
        $metier = Metier::find($id);

        $metier->libelle = $request->libelle;
        $metier->description = $request->description;

        if($request->image){
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images/metiers'), $imageName);

            $metier->image = $imageName;
        }

        $metier->save();

        return redirect()->back()->with('message', 'Métier modifié avec succès');
    }

    public function delete($id){
        $metier = Metier::find($id);

        $metier->delete();

        return redirect()->back()->with('message', 'Metier supprimé avec succès');
    }


    public function searchMetier(){
        $metiers = Metier::All();

        return view('search', compact('metiers'));
    }


    //Gestion des métiers
    public function showMetiers(){
        $metiers = Metier::All();
        $secteurs = Secteur::All();
        return view('admin.metiers.metierList', compact('metiers', 'secteurs'));
    }

    

    

    public function showOneMetier($id){
        $metier = Metier::find($id);
        $secteur = Secteur::find($metier->secteur_id);
        return view('admin.metiers.edit', compact('metier'));
    }

    public function searchMetierDetails($id){
        $formations = Formation::where('metier_id', '=', $id)->get();
        $metier = Metier::find($id);

        if($formations){
            $metiername = $metier->libelle;
            return view('user.searchMetierDetail', compact('formations', 'metiername'));
        }
        else{
            $message = "Aucune formation disponible pour le métier";
            return view('user.searchMetierDetail', compact('message'));
        }
    }
}
