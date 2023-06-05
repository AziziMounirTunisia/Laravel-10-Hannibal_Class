<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin Seeder Data
            [
                'name' =>'Admin',
                'lname'=>'Mounir',
                'username'=>'admin',
                'email'=>'admin@site.com',
                'password'=>Hash::make('12345678'),
                'role'=>'admin',
                'status'=>'active',
            ],

            // Agent Seeder Data
            [
                'name' =>'Agent',
                'lname'=>'Moussa',
                'username'=>'agent',
                'email'=>'agent@site.com',
                'password'=>Hash::make('12345678'),
                'role'=>'agent',
                'status'=>'active',
            ],
            // Agent Seeder Data
            [
                'name' =>'User',
                'lname'=>'Zinou',
                'username'=>'user',
                'email'=>'user@site.com',
                'password'=>Hash::make('12345678'),
                'role'=>'user',
                'status'=>'active',
            ],

        ]);
    }
}
