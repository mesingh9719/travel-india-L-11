<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicleTypes = [
            [
                'name' => 'Hatchback',
                'description' => 'A compact car ideal for city travel and short distances, offering economy and convenience.',
                'is_active' => true,
            ],
            [
                'name' => 'Sedan',
                'description' => 'A standard car suitable for small families or business travel, providing a balance of comfort and style.',
                'is_active' => true,
            ],
            [
                'name' => 'SUV',
                'description' => 'A sport utility vehicle offering spacious interiors and better handling on rough terrains.',
                'is_active' => true,
            ],
            [
                'name' => 'Van',
                'description' => 'A large vehicle ideal for group travel or transporting goods, offering ample space and comfort.',
                'is_active' => true,
            ],
            [
                'name' => 'Bus',
                'description' => 'A vehicle designed to carry a large number of passengers, perfect for group travel over long distances.',
                'is_active' => true,
            ],
        ];

        foreach ($vehicleTypes as $vehicleType) {
            VehicleType::create($vehicleType);
        }
    }
}
