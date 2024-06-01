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

    public function showPanier(){
        $user = Auth::user();
        $paniers = Panier::where('email', '=', $user->email)->get();

        if(count($paniers) ==0){
            $message_error = 'Aucun Article ajouté au panier';
            return view('user.panier', compact('message_error', 'paniers'));
        }else{
            return view('user.panier', compact('paniers'));
        }
        
    }

    

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function formations(){

        return view('formations');
    }

    public function blog(){

        $actualites = Actualite::All();
        return view('user.blog', compact('actualites'));
    }


    public function blogDetails($id){
        $actualite = Actualite::find($id);
        $formation = Formation::find($actualite->formation_id);

        $secteurs = Secteur::All();

        return view('user.blogDetail', compact('formation', 'actualite', 'secteurs'));
    }


}
