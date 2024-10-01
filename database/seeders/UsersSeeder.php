<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if(! Users::where("role", "developer")->exists()){
            
            $user = new Users();

            $user->username = "developer";
            $user->password = Hash::make("0112");
            $user->role = "developer";
    
            $user->save();
    
        }
        
    }
}
