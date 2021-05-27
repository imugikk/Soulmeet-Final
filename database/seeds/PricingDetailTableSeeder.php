<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PricingDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricing_details')->insert([
            'id' => '1',
            'title' => 'Konsultasi Daring',
            'price' => '149000',
            'price_type' => '1',
            'type' => 'jam',
            'pricing_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_details')->insert([
            'id' => '3',
            'title' => 'Support Group',
            'price_type' => '0',
            'pricing_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_details')->insert([
            'id' => '2',
            'title' => 'Kelas Daring dan Webinar',
            'price' => '0',
            'price_type' => '1',
            'type' => 'kelas',
            'pricing_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
