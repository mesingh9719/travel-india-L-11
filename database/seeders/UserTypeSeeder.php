<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTypes = [
            [
                'name' => 'Owner',
                'description' => 'Owner User',
                'is_active' => '1',
            ],
            [
                'name' => 'Driver',
                'description' => 'Driver User',
                'is_active' => '1',
            ],
            [
                'name' => 'Customer',
                'description' => 'Customer User',
                'is_active' => '1',
            ],
        ];

        foreach ($userTypes as $userType) {
            UserType::create($userType);
        }
    }
}
