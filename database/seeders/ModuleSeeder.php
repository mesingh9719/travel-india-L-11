<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

          DB::table('modules')->insert([
            [
                'name' => 'User',
                'description' => 'Description for User Module',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DL',
                'description' => 'Description for DL Module',
                'created_at' => now(),
                'updated_at' => now(),
            ],

             [
                'name' => 'Vehicle',
                'description' => 'Description for Vehicle Module',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    
    }
}
