<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;


class HomeController extends Controller
{

    public function redirect(){
        $userRole=Auth::user()->user_role;

        if($userRole=='0'){
            return view('home');
        }
        else{
            return view('admin.dashboard');
        }
    }
}
