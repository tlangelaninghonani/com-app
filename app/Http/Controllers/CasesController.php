<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Cases;
use App\Models\Agents;
use App\Models\Compensations;

class CasesController extends Controller
{
    public function resetCases(){

        DB::table("cases")->delete();

        return redirect("/cases");
    }

    public function newCaseForm(){
        
        $agents = Agents::all();
        $cases = Cases::all();

        return view("new_case_form", [
            "user" => Session::get("user"),
            "agents" => $agents,
            "cases" => $cases

        ]);
    }

    public function viewCase($caseId){

        $case = Cases::find($caseId);
        $agent = Agents::find($case->agent_id);

        return view("view_case", [
            "user" => Session::get("user"),
            "case" => $case,
            "agent" => $agent,
        ]);
    }

    public function casePayment(Request $req, $caseId){


        $case = Cases::find($caseId);
        $case->paid_amount = $req->amount;
        $case->date_paid = date("Y - m - d");
        $case->paid = true;

        $comp = new Compensations();
        $comp->agent_id = $case->agent_id;
        $comp->commission = ($req->amount * 0.30);

        $comp->save();
        $case->save();



        return redirect("cases");
    }

    public function caseDelete($caseId){

        DB::table("cases")->where("id", $caseId)->delete();
        
        return redirect("cases");
    }

    public function newCaseUpload(Request $req){
        

        $attendingAgent = Agents::find($req->attendingagentid);

        $newCase = new Cases();

        $newCase->case_number = substr(uniqid(), -5);

        $newCase->application_type = strtolower($req->applicationtype);
        $newCase->id_number = $req->idnumber;
        $newCase->title = strtolower($req->title);
        $newCase->first_name = strtolower($req->firstname);
        $newCase->last_name = strtolower($req->lastname);
        $newCase->marital = strtolower($req->maritalstatus);
        $newCase->physical_address = strtolower($req->physicaladdress);
        $newCase->mobile_1 = $req->mobile1;
        $newCase->mobile_2 = $req->mobile2;
        $newCase->email = json_encode([strtolower($req->emailusername), strtolower($req->emailserver)]);
        $newCase->employer = strtolower($req->employer);
        $newCase->employer_address = strtolower($req->employeraddress);
        $newCase->bank = strtolower($req->bank);
        $newCase->account_type = strtolower($req->accounttype);
        $newCase->account_number = strtolower($req->accountnumber);
        $newCase->branch_code = strtolower($req->branchcode);
        $newCase->dependents = ($req->dependents);
        $newCase->income = ($req->income);
        $newCase->expenses = ($req->expenses);
        $newCase->debts = ($req->debts);
        $newCase->branch = strtolower($attendingAgent->branch);
        $newCase->agent_id = $req->attendingagentid;
        $newCase->product = $req->product;
        $newCase->save();

        return redirect("/cases");
    }
}
