<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    \App\Models\UserAccount::insert([
        [
            'username' => 'admin',
            'full_name' => 'System Administrator'
        ],
        [
            'username' => 'staff1',
            'full_name' => 'John Ramos'
        ],
        [
            'username' => 'staff2',
            'full_name' => 'Jane Cruz'
        ],
        [
            'username' => 'cashier1',
            'full_name' => 'Mark Santos'
        ],
        [
            'username' => 'cashier2',
            'full_name' => 'Paul Garcia'
        ]
    ]);
}
}
