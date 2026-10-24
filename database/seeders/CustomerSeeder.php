<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    \App\Models\Customer::insert([
        [
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@gmail.com',
            'phone' => '09123456789'
        ],
        [
            'full_name' => 'Maria Santos',
            'email' => 'maria@gmail.com',
            'phone' => '09111111111'
        ],
        [
            'full_name' => 'Pedro Reyes',
            'email' => 'pedro@gmail.com',
            'phone' => '09222222222'
        ],
        [
            'full_name' => 'Anna Cruz',
            'email' => 'anna@gmail.com',
            'phone' => '09333333333'
        ],
        [
            'full_name' => 'Mark Lopez',
            'email' => 'mark@gmail.com',
            'phone' => '09444444444'
        ]
    ]);
}
}
