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
            return view('home');
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

        return view('user.result', compact('results', 'title'));
    }

    public function searchFormationName(Request $request, $title){


    }
}
