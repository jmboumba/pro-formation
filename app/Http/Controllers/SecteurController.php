<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Formation;

class SecteurController extends Controller
{
    //

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

}
