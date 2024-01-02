<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $password = bcrypt('admin');

    Admin::create([
        'gmail' => 'admin@admin.com',
        'password' => $password,
        'phone' => '01xxxxxxxxx'
    ]);
    }
}
