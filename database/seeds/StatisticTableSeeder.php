<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatisticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            'id' => '1',
            'title' => 'Kamu tau nggak kalau ...',
            'desc' => '',
            'image' => 'https://image.freepik.com/free-vector/man-lying-sofa-when-woman-standing-looking-him-couch-laziness-wife-flat-vector-illustration-family-relationship_74855-8448.jpg',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
