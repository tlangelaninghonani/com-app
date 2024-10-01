<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agents;

class AgentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $agentsJSON = '
        [
            {"first_name": "Fernande", "last_name": "Hauer"},
            {"first_name": "Erlinda", "last_name": "Thiel"},
            {"first_name": "Elena", "last_name": "Soleman"},
            {"first_name": "Hiroko", "last_name": "Froncillo"},
            {"first_name": "Jordon", "last_name": "Buehring"},
            {"first_name": "Verlie", "last_name": "Coelho"},
            {"first_name": "Amos", "last_name": "Wernecke"},
            {"first_name": "Chasidy", "last_name": "Jaskolski"},
            {"first_name": "Dollie", "last_name": "Estrem"},
            {"first_name": "Noma", "last_name": "Mends"},
            {"first_name": "Alice", "last_name": "Smith"},
            {"first_name": "Bob", "last_name": "Johnson"},
            {"first_name": "Carol", "last_name": "Williams"},
            {"first_name": "David", "last_name": "Jones"},
            {"first_name": "Eva", "last_name": "Brown"},
            {"first_name": "Frank", "last_name": "Davis"},
            {"first_name": "Grace", "last_name": "Miller"},
            {"first_name": "Henry", "last_name": "Wilson"},
            {"first_name": "Ivy", "last_name": "Moore"},
            {"first_name": "Jack", "last_name": "Taylor"}
        ]
        ';


        $agents = json_decode($agentsJSON);

        $branches = ["giyani", "polokwane", "johannesburg", "bloemfontein"];

        foreach($agents as $agent){

            $newAgent = new Agents();
        
            $newAgent->id_number = rand(1000000000000, 9999999999999);
            $newAgent->first_name = strtolower($agent->first_name);
            $newAgent->last_name = strtolower($agent->last_name);
            $newAgent->extension = rand(1, 30);
            $newAgent->mobile = rand(1000000000, 9999999999);
            $newAgent->branch = $branches[array_rand($branches)];

            $newAgent->save();
        }

    }
}
