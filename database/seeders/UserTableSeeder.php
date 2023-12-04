<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'gmail'=>'admin@gmail.com',
            'phone'=>'01956020255',
            'password'=>'admin',
            'role'=>'admin',
            'otp'=>'123',
        ]);
    }
}
