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

            // Create or fetch abilities
            $addVehicleAbility = Bouncer::ability()->firstOrCreate(['name' => 'add vehicle']);

            // Assign abilities to the role
            $adminRole->allow($addVehicleAbility);

            // Assign role to user
            $user = \App\Models\User::find(1);
            Bouncer::assign($adminRole)->to($user);


    }
}
