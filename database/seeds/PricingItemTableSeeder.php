<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PricingItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricing_items')->insert([
            'id' => '1',
            'pricing_detail_id' => '1',
            'desc' => '24/7 Video on Demand',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '2',
            'pricing_detail_id' => '1',
            'desc' => 'Online Worksheets',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '3',
            'pricing_detail_id' => '1',
            'desc' => 'Forum Diskusi dan Tanya Jawab',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '4',
            'pricing_detail_id' => '1',
            'desc' => 'Certificate',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '5',
            'pricing_detail_id' => '2',
            'desc' => 'Jurnal Konsultasi',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '6',
            'pricing_detail_id' => '2',
            'desc' => 'Konsultasi Privat',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '7',
            'pricing_detail_id' => '2',
            'desc' => 'Rekomendasi Kelas/Materi',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '8',
            'pricing_detail_id' => '3',
            'desc' => 'Pengelompokan otomatis sesuai dengan kebutuhan kamu',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pricing_items')->insert([
            'id' => '9',
            'pricing_detail_id' => '3',
            'desc' => 'Konseling dengan sesama, saling sharing',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
