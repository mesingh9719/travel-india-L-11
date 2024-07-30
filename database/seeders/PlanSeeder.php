<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic',
                'description' => 'Basic Plan',
                'price' => '1000',
                'duration' => '1',
                'duration_type' => 'month',
                'max_vehicle' => '1',
                'max_driver' => '1',
                'max_lead' => '100',
                'per_lead_price' => '10',
            ],
            [
                'name' => 'Standard',
                'description' => 'Standard Plan',
                'price' => '2000',
                'duration' => '1',
                'duration_type' => 'month',
                'max_vehicle' => '3',
                'max_driver' => '3',
                'max_lead' => '200',
                'per_lead_price' => '10',
            ],
            [
                'name' => 'Premium',
                'description' => 'Premium Plan',
                'price' => '3000',
                'duration' => '1',
                'duration_type' => 'month',
                'max_vehicle' => '5',
                'max_driver' => '5',
                'max_lead' => '300',
                'per_lead_price' => '10',
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
