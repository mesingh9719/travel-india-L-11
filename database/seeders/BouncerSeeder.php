<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;

class BouncerSeeder extends Seeder
{
    public function run()
    {
        // Create roles
            $adminRole = Bouncer::role()->firstOrCreate(['name' => 'admin']);
            $ownerRole =Bouncer::role()->firstOrCreate(['name' => 'owner']);
            $userRole = Bouncer::role()->firstOrCreate(['name' => 'user']);
            $addVehicleAbility =[
            Bouncer::ability()->firstOrCreate(['name' => 'create']),
            Bouncer::ability()->firstOrCreate(['name' => 'edit']),
            Bouncer::ability()->firstOrCreate(['name' => 'show']),
            Bouncer::ability()->firstOrCreate(['name' => 'delete']),
            ];
        
            // // // Assign abilities to the role
            // $adminRole->allow($addVehicleAbility);


            // // // Assign role to user
            // $user = \App\Models\User::find(1);
            // Bouncer::assign($adminRole)->to($user);


    }
}
