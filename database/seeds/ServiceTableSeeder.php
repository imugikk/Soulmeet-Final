<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'id' => '1',
            'title' => 'Berita baiknya, itu semua bisa banget dicegah lho!',
            'subtitle' => 'Yuk kita belajar bareng di Soulmeet! Platform Pembelajaran Pernikahan dan Hubungan Nomor #1 di Indonesia! 100% Daring.',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
