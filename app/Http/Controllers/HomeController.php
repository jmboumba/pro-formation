<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Formation;
use App\Models\Secteur;
use App\Models\Metier;
use App\Models\Actualite;

class HomeController extends Controller
{

    public function index(){
        $formations = Formation::All();
        $secteurs = Secteur::All();
        $actualites = Actualite::All();
        return view('home', compact('formations', 'secteurs', 'actualites'));
    }

    public function redirect(){
        $user = Auth::user();
        $userRole=Auth::user()->user_role;

        if($userRole=='0'){
            return redirect('/home');
        }
        else if($userRole=='1'){
            return view('admin.dash');
        }
    }

    //search by metier or secteur view
    public function searchMetier(){
        $metiers = Metier::All();

        return view('user.search', compact('metiers'));
    }

    public function searchSecteur(){
        $secteurs = Secteur::All();

        return view('user.search', compact('secteurs'));
    }

    public function search(Request $request)
    {
        $title = $request->input('title');
        $results = Formation::where('titre', 'LIKE', '%' . $title . '%')->get();

        if(count($results) ==0){
            $message_error = 'Aucun resultat trouvé';
            return view('user.result', compact('message_error', 'title'));
        }else{
            return view('user.result', compact('results', 'title'));
        }
        
    }

    public function formationDetails($id){

        $formation = Formation::find($id);
        $metier = Metier::find($formation->metier_id);
        $secteur = Secteur::find($metier->secteur_id);

        return view('user.show_formation', compact('formation', 'metier', 'secteur'));
    }

    public function addToPanier(Request $request, $id){
        $debut = $request->debut;
        $user = Auth::user();
        $formation = Formation::find($id);

        return view('user.panier', compact('debut', 'user', 'formation'));
    }
}
