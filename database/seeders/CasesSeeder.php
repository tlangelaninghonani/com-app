<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cases;
use App\Models\Agents;
use App\Models\Compensations;

class CasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $casesJSON = '
[
    {"idnumber": "1234567890123", "title": "mr", "first_name": "john", "last_name": "doe", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "savings", "account_number": "1234567890", "branch_code": "632005", "paid": true},
    {"idnumber": "2345678901234", "title": "mrs", "first_name": "jane", "last_name": "smith", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "2345678901", "branch_code": "250655", "paid": false},
    {"idnumber": "3456789012345", "title": "dr", "first_name": "alice", "last_name": "johnson", "application_type": "single", "marital": "divorced", "bank": "standard bank", "account_type": "savings", "account_number": "3456789012", "branch_code": "051001", "paid": true},
    {"idnumber": "4567890123456", "title": "ms", "first_name": "bob", "last_name": "brown", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "4567890123", "branch_code": "198765", "paid": false},
    {"idnumber": "5678901234567", "title": "mrs", "first_name": "carol", "last_name": "davis", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "current", "account_number": "5678901234", "branch_code": "632006", "paid": true},
    {"idnumber": "6789012345678", "title": "mr", "first_name": "daniel", "last_name": "miller", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "savings", "account_number": "6789012345", "branch_code": "250656", "paid": false},
    {"idnumber": "7890123456789", "title": "ms", "first_name": "eva", "last_name": "wilson", "application_type": "single", "marital": "widowed", "bank": "standard bank", "account_type": "current", "account_number": "7890123456", "branch_code": "051002", "paid": true},
    {"idnumber": "8901234567890", "title": "dr", "first_name": "frank", "last_name": "moore", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "savings", "account_number": "8901234567", "branch_code": "198766", "paid": false},
    {"idnumber": "9012345678901", "title": "mrs", "first_name": "grace", "last_name": "taylor", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "current", "account_number": "9012345678", "branch_code": "632007", "paid": true},
    {"idnumber": "0123456789012", "title": "mr", "first_name": "henry", "last_name": "jackson", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "savings", "account_number": "0123456789", "branch_code": "250657", "paid": false},
    {"idnumber": "1234567890124", "title": "ms", "first_name": "isabella", "last_name": "white", "application_type": "single", "marital": "divorced", "bank": "standard bank", "account_type": "current", "account_number": "1234567891", "branch_code": "051003", "paid": true},
    {"idnumber": "2345678901235", "title": "dr", "first_name": "jack", "last_name": "adams", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "savings", "account_number": "2345678902", "branch_code": "198767", "paid": false},
    {"idnumber": "3456789012346", "title": "mrs", "first_name": "julia", "last_name": "king", "application_type": "single", "marital": "widowed", "bank": "absa", "account_type": "current", "account_number": "3456789013", "branch_code": "632008", "paid": true},
    {"idnumber": "4567890123457", "title": "mr", "first_name": "kevin", "last_name": "lee", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "savings", "account_number": "4567890124", "branch_code": "250658", "paid": false},
    {"idnumber": "5678901234568", "title": "ms", "first_name": "linda", "last_name": "clark", "application_type": "single", "marital": "single", "bank": "standard bank", "account_type": "current", "account_number": "5678901235", "branch_code": "051004", "paid": true},
    {"idnumber": "6789012345679", "title": "dr", "first_name": "michael", "last_name": "roberts", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "savings", "account_number": "6789012346", "branch_code": "198768", "paid": false},
    {"idnumber": "7890123456790", "title": "mrs", "first_name": "natalie", "last_name": "hall", "application_type": "single", "marital": "divorced", "bank": "absa", "account_type": "current", "account_number": "7890123457", "branch_code": "632009", "paid": true},
    {"idnumber": "8901234567901", "title": "mr", "first_name": "olivia", "last_name": "martin", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "savings", "account_number": "8901234568", "branch_code": "250659", "paid": false},
    {"idnumber": "9012345678902", "title": "ms", "first_name": "peter", "last_name": "wright", "application_type": "single", "marital": "widowed", "bank": "standard bank", "account_type": "current", "account_number": "9012345679", "branch_code": "051005", "paid": true},
    {"idnumber": "0123456789014", "title": "dr", "first_name": "quinn", "last_name": "hill", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "savings", "account_number": "0123456790", "branch_code": "198769", "paid": false},
    {"idnumber": "1234567890125", "title": "mrs", "first_name": "rachel", "last_name": "anderson", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "current", "account_number": "1234567892", "branch_code": "632010", "paid": true},
    {"idnumber": "2345678901236", "title": "mr", "first_name": "steve", "last_name": "collins", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "savings", "account_number": "2345678903", "branch_code": "250660", "paid": false},
    {"idnumber": "3456789012347", "title": "ms", "first_name": "tina", "last_name": "jenkins", "application_type": "single", "marital": "divorced", "bank": "standard bank", "account_type": "current", "account_number": "3456789014", "branch_code": "051006", "paid": true},
    {"idnumber": "4567890123458", "title": "dr", "first_name": "ursula", "last_name": "baker", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "savings", "account_number": "4567890125", "branch_code": "198770", "paid": false},
    {"idnumber": "5678901234569", "title": "mrs", "first_name": "victor", "last_name": "thompson", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "savings", "account_number": "5678901236", "branch_code": "632011", "paid": true},
    {"idnumber": "6789012345680", "title": "mr", "first_name": "wendy", "last_name": "clarke", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "6789012347", "branch_code": "250661", "paid": false},
    {"idnumber": "7890123456791", "title": "ms", "first_name": "xander", "last_name": "scott", "application_type": "single", "marital": "widowed", "bank": "standard bank", "account_type": "savings", "account_number": "7890123458", "branch_code": "051007", "paid": true},
    {"idnumber": "8901234567902", "title": "dr", "first_name": "yasmine", "last_name": "walker", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "8901234569", "branch_code": "198771", "paid": false},
    {"idnumber": "9012345678903", "title": "mrs", "first_name": "zach", "last_name": "morris", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "savings", "account_number": "9012345680", "branch_code": "632012", "paid": true},
    {"idnumber": "0123456789015", "title": "mr", "first_name": "aaron", "last_name": "mitchell", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "0123456791", "branch_code": "250662", "paid": false},
    {"idnumber": "1234567890126", "title": "ms", "first_name": "bella", "last_name": "reid", "application_type": "single", "marital": "divorced", "bank": "standard bank", "account_type": "savings", "account_number": "1234567893", "branch_code": "051008", "paid": true},
    {"idnumber": "2345678901237", "title": "dr", "first_name": "charlie", "last_name": "brooks", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "2345678904", "branch_code": "198772", "paid": false},
    {"idnumber": "3456789012348", "title": "mrs", "first_name": "diana", "last_name": "green", "application_type": "single", "marital": "widowed", "bank": "absa", "account_type": "savings", "account_number": "3456789015", "branch_code": "632013", "paid": true},
    {"idnumber": "4567890123459", "title": "mr", "first_name": "ella", "last_name": "hughes", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "4567890126", "branch_code": "250663", "paid": false},
    {"idnumber": "5678901234570", "title": "ms", "first_name": "frankie", "last_name": "bell", "application_type": "single", "marital": "single", "bank": "standard bank", "account_type": "savings", "account_number": "5678901237", "branch_code": "051009", "paid": true},
    {"idnumber": "6789012345681", "title": "dr", "first_name": "grace", "last_name": "evans", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "6789012348", "branch_code": "198773", "paid": false},
    {"idnumber": "7890123456792", "title": "mrs", "first_name": "henry", "last_name": "cooper", "application_type": "single", "marital": "divorced", "bank": "absa", "account_type": "savings", "account_number": "7890123459", "branch_code": "632014", "paid": true},
    {"idnumber": "8901234567903", "title": "mr", "first_name": "isabella", "last_name": "flores", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "8901234570", "branch_code": "250664", "paid": false},
    {"idnumber": "9012345678904", "title": "ms", "first_name": "jake", "last_name": "ross", "application_type": "single", "marital": "widowed", "bank": "standard bank", "account_type": "savings", "account_number": "9012345681", "branch_code": "051010", "paid": true},
    {"idnumber": "0123456789016", "title": "dr", "first_name": "kyle", "last_name": "morgan", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "0123456792", "branch_code": "198774", "paid": false},
    {"idnumber": "1234567890127", "title": "mrs", "first_name": "luna", "last_name": "stevens", "application_type": "single", "marital": "single", "bank": "absa", "account_type": "savings", "account_number": "1234567894", "branch_code": "632015", "paid": true},
    {"idnumber": "2345678901238", "title": "mr", "first_name": "mason", "last_name": "bennett", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "2345678905", "branch_code": "250665", "paid": false},
    {"idnumber": "3456789012349", "title": "ms", "first_name": "nina", "last_name": "bailey", "application_type": "single", "marital": "divorced", "bank": "standard bank", "account_type": "savings", "account_number": "3456789016", "branch_code": "051011", "paid": true},
    {"idnumber": "4567890123460", "title": "dr", "first_name": "olivia", "last_name": "phillips", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "4567890127", "branch_code": "198775", "paid": false},
    {"idnumber": "5678901234571", "title": "mrs", "first_name": "paul", "last_name": "williams", "application_type": "single", "marital": "widowed", "bank": "absa", "account_type": "savings", "account_number": "5678901238", "branch_code": "632016", "paid": true},
    {"idnumber": "6789012345682", "title": "mr", "first_name": "quinn", "last_name": "carter", "application_type": "joint", "marital": "married", "bank": "fnb", "account_type": "current", "account_number": "6789012349", "branch_code": "250666", "paid": false},
    {"idnumber": "7890123456793", "title": "ms", "first_name": "rose", "last_name": "foster", "application_type": "single", "marital": "single", "bank": "standard bank", "account_type": "savings", "account_number": "7890123460", "branch_code": "051012", "paid": true},
    {"idnumber": "8901234567904", "title": "dr", "first_name": "steve", "last_name": "baker", "application_type": "joint", "marital": "married", "bank": "nedbank", "account_type": "current", "account_number": "8901234571", "branch_code": "198776", "paid": false}
    ]
';

        $cases = json_decode($casesJSON);
        $products = ["review", "score", "removal", "transfer"];
        $martial = ["single", "married", "divorced"];

        foreach($cases as $case){

            $paid = (bool)rand(0, 1);

            $monthsRand = rand(1, 12);

            $attendingAgent = Agents::find(rand(1, 20));

            $newCase = new Cases();

            $newCase->case_number = substr(uniqid(), -5);
            $newCase->application_type = strtolower($case->application_type);
            $newCase->id_number = $case->idnumber;
            $newCase->title = strtolower($case->title);
            $newCase->first_name = strtolower($case->first_name);
            $newCase->last_name = strtolower($case->last_name);
            $newCase->marital = $case->marital;
            $newCase->mobile_1 = rand(1000000000, 9999999999);
            $newCase->mobile_2 = rand(1000000000, 9999999999);
            $newCase->application_type = strtolower($case->application_type);
            $newCase->bank = strtolower($case->bank);
            $newCase->account_type = strtolower($case->account_type);
            $newCase->account_number = strtolower($case->account_number);
            $newCase->branch_code = strtolower($case->branch_code);
            $newCase->agent_id = $attendingAgent->id;
            $newCase->branch = $attendingAgent->branch;
            $newCase->paid = $paid;

            if($paid == true){
                
                $newCase->paid_amount = rand(500, 15000);

                if(! Compensations::where("agent_id", $attendingAgent->id)->exists()){

                    $comp = new Compensations();
                    $comp->agent_id = $attendingAgent->id;
                    $comp->commission = ($newCase->paid_amount * 0.30);

                }else{

                    $comp = Compensations::where("agent_id", $attendingAgent->id)->first();

                    $comp->commission += ($newCase->paid_amount * 0.30);
                }

                $comp->save();
                
            }

            $newCase->date_signed = date("Y - ".$monthsRand." - ".rand(1, 31));
            $newCase->month_signed = $monthsRand;
            $newCase->product = $products[array_rand($products)];

            $newCase->save();
        }
    }
}
