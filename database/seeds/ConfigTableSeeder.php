<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
            'id' => '1',
            'title' => 'Soulmeet',
            'desc' => '#SemuaBerawalDariKeluarga #SetiapHubunganSangatBerarti',
            'address' => 'Jl Ngaglik 51 Surabaya 60237',
            'email' => 'info@soulmeet.id',
            'phone' => '0812 3456 7890',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
