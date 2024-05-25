<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Formation;
use App\Models\Secteur;


class HomeController extends Controller
{

    public function index(){
        $formations = Formation::All();
        $secteurs = Secteur::All();
        return view('home', compact('formations', 'secteurs'));
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
}
