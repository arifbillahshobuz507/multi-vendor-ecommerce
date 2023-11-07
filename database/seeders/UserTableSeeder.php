<?php

namespace Database\Seeders;

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
        User::create([
            'email'=>'admin@gmail.com',
            'password'=>'admin',
            'first_name'=>'arifbillah',
            'last_name'=>'arifbillah',
            'phone'=>'01956020255'
        ]);
    }
}
