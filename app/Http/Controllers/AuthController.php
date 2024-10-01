<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{


    public function authGet(){

        if(Session::has("user")){

            return redirect("/insights");
        }

        return view("auth");
    }


    public function authPost(Request $req){

        if(Users::where("username", $req->username)->exists()){

            $user = Users::where("username", $req->username)->first();

            if(Hash::check($req->password, $user->password)){

                Session::put("user", $user);

                return redirect("/insights");
            }
        }

        return back();
    }

    public function authOut(){

        Session::flush();

        return redirect("/auth_get");
    }
}
