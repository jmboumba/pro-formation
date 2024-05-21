<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Formation;


class HomeController extends Controller
{

    public function redirect(){
        $user = Auth::user();
        $userRole=Auth::user()->user_role;

        if($userRole=='0'){
            $formations = Formation::All();
            return view('home', compact('formations'));
        }
        else{
            return view('admin.dashboard');
        }
    }
}
