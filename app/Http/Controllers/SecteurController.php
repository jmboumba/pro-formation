<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;

class SecteurController extends Controller
{
    //
    public function index(){
        $secteurs = Secteur::All();
        return view('admin.secteurs.secteurList', compact('secteurs'));
    }


    public function add(){
        return view('admin.secteurs.add');
    }


    public function store(Request $request){
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
        

        return redirect()->back()->with('message', 'Secteur correctement ajoutée.');
    }


    public function update(Request $request, $id){
        $secteur = Secteur::find($id);

        $secteur->libelle = $request->libelle;
        $secteur->description = $request->description;

        if($request->image){
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images/secteurs'), $imageName);

            $secteur->image = $imageName;
        }

        $secteur->save();

        return redirect()->back()->with('message', 'Secteur modifié avec succès');
    }


    public function delete($id){
        $secteur = Secteur::find($id);

        $secteur->delete();

        return redirect()->back()->with('message', 'Secteur supprimé avec succès');
    }

    public function details($id){
        $secteur = Secteur::find($id);
        return view('admin.secteurs.edit', compact('secteur'));
    }




    public function searchSecteur(){
        $secteurs = Secteur::All();

        return view('search', compact('secteurs'));
    }



    //Gestion des Secteurs

    

    

    public function searchSecteurDetails($id){
        $formations = Formation::where('secteur_id', '=', $id)->get();
        $secteur = Secteur::find($id);
        
        if($formations){
            $secteurname = $secteur->libelle;
            return view('user.searchDetail', compact('formations', 'secteurname'));
        }
        else{
            $message = "Aucune formation disponible pour le secteur";
            return view('user.searchDetail', compact('message'));
        }

    }

}
