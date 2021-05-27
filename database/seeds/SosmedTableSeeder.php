<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SosmedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->insert([
            'id' => '1',
            'ikon' => 'icofont-twitter',
            'title' => 'Twitter',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sosmeds')->insert([
            'id' => '2',
            'ikon' => 'icofont-facebook',
            'title' => 'Facebook',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sosmeds')->insert([
            'id' => '3',
            'ikon' => 'icofont-instagram',
            'title' => 'Instagram',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sosmeds')->insert([
            'id' => '4',
            'ikon' => 'icofont-linkedin',
            'title' => 'LinkedIn',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
