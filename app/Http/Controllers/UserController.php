<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function delete($id){
        $user = User::find($id);

        if($user){
            $user->delete();
            return redirect()->back()->with('message', 'Utilisateur correctement supprimé.');
        }else{
            return redirect()->back()->with('message', 'Error de suppression.');
        }
    }

    public function update($id){
        $user = User::find($id);

        if($user->user_role == 0){
            $user->user_role = 1;
        }else{
            $user->user_role = 0;
        }

        $user->save();

        return redirect()->back()->with('message', "Role de l'utilisateur correctement modifié.");
    }
}
