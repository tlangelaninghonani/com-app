<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branches;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = new Branches();
        $branches->branch_name = "giyani";
        $branches->branch_address = "";
        $branches->number_of_agents = 10;
        $branches->save();

        $branches->branch_name = "polokwane";
        $branches->branch_address = "";
        $branches->number_of_agents = 10;
        $branches->save();

        $branches->branch_name = "johannesburg";
        $branches->branch_address = "";
        $branches->number_of_agents = 10;
        $branches->save();

        $branches->branch_name = "bloemfontein";
        $branches->branch_address = "";
        $branches->number_of_agents = 10;
        $branches->save();
    }
}
