<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExpertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experts')->insert([
            'id' => '1',
            'title' => 'Psikolog, Konselor, dan Penasihat Kami',
            'subtitle' => 'Semua konten dari Soulmeet direkomendasikan oleh orang-orang yang sangat berpengalaman di bidangnya loh!',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
