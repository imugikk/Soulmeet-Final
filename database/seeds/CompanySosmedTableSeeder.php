<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanySosmedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_sosmeds')->insert([
            'id' => '1',
            'config_id' => '1',
            'sosmed_id' => '1',
            'url' => 'https://twitter.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('company_sosmeds')->insert([
            'id' => '2',
            'config_id' => '1',
            'sosmed_id' => '2',
            'url' => 'https://facebook.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('company_sosmeds')->insert([
            'id' => '3',
            'config_id' => '1',
            'sosmed_id' => '3',
            'url' => 'https://instagram.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('company_sosmeds')->insert([
            'id' => '4',
            'config_id' => '1',
            'sosmed_id' => '4',
            'url' => 'https://linkedin.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
