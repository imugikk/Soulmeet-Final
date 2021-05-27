<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admininistrator',
            'email' => 'admin@soulmeet.com',
            'password' => Hash::make('admin123'),
            'roles' => 'ADMIN',
        ]);

        DB::table('users')->insert([
            'name' => 'Respondent 1',
            'email' => 'respondent1@soulmeet.com',
            'password' => Hash::make('123123123'),
            'roles' => 'USER',
        ]);

        DB::table('users')->insert([
            'name' => 'Respondent 2',
            'email' => 'respondent2@soulmeet.com',
            'password' => Hash::make('123123123'),
            'roles' => 'USER',
        ]);
    }
}
