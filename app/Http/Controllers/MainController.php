<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cases;
use App\Models\Agents;
use App\Models\Branches;
use App\Models\Compensations;

class MainController extends Controller
{
    public function insights(){

        if(! Session::has("user")){

            return redirect("/auth_get");
        }

        $cases = Cases::all();
        $agents = Agents::all();

        return view("insights", [
            "user" => Session::get("user"),
            "cases" => $cases,
            "casesClass" => new Cases(),
            "agentsClass" => new Agents(),
            "agents" => $agents
        ]);
    }

    public function cases(){

        if(! Session::has("user")){

            return redirect("/auth_get");
        }

        $cases = Cases::all();
        
        return view("cases", [
            "user" => Session::get("user"),
            "cases" => $cases,
            "agentsClass" => new Agents(),
        ]);
    }

    public function agents(){

        if(! Session::has("user")){

            return redirect("/auth_get");
        }

        $agents = Agents::all();
        $cases = Cases::all();

        return view("agents", [
            "user" => Session::get("user"),
            "agents" => $agents,
            "cases" => $cases,
        ]);
    }

    public function compensation(){

        if(! Session::has("user")){

            return redirect("/auth_get");
        }

        $comps = Compensations::all();

        return view("compensation", [
            "user" => Session::get("user"),
            "agentsClass" => new Agents(),
            "comps" => $comps
        ]);
    }

    public function panel(){

        if(! Session::has("user")){

            return redirect("/auth_get");
        }

        return view("panel", [
            "user" => Session::get("user")
        ]);
    }
}
