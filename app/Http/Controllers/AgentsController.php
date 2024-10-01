<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Agents;
use App\Models\Branches;
use App\Models\Cases;

class AgentsController extends Controller
{
    public function resetAgents(){

        DB::table("agents")->delete();

        return redirect("/agents");
    }

    public function newAgentForm(){

        return view("new_agent_form", [
            "user" => Session::get("user"),
        ]);
    }

    public function newAgentUpload(Request $req){

        $newAgent = new Agents();

        $newAgent->id_number = $req->idnumber;
        $newAgent->first_name = strtolower($req->firstname);
        $newAgent->last_name = strtolower($req->lastname);
        $newAgent->extension = $req->extension;
        $newAgent->mobile = $req->mobile;
        $newAgent->branch = $req->branch;
        
        $newAgent->save();

        return redirect('/agents');
    }
}
