<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
            'name' => 'James Kanyiri',
            'email'=>'jmskanyiri@gmail.com',
            'password'=> Hash::make('password'),
            'registration_no' => 'cit-222-065/2019',
        ])->assignRole('Super Admin');

         User::create([
            'name' => 'Brian Njeru',
            'email'=>'bnjeru31@gmail.com',
            'password'=> Hash::make('1234'),
            'registration_no' => 'cit-222-006/2019',
        ])->assignRole('Super Admin');



        
    }
}
