<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatisticDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistic_details')->insert([
            'id' => '1',
            'id_statistics' => '1',
            'ikon' => 'icofont-sad',
            'title' => '480.618',
            'subtitle' => 'Jumlah Perceraian',
            'desc' => 'Pada 2019 terjadi 480.618 perceraian, meningkat 17,7% dibandingkan tahun sebelumnya.',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('statistic_details')->insert([
            'id' => '2',
            'id_statistics' => '1',
            'ikon' => 'icofont-hand-power',
            'title' => '11.105',
            'subtitle' => 'Kekerasan Dalam Rumah Tangga (KDRT)',
            'desc' => 'Terdapat 11.105 aduan KDRT selama tahun 2019.',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('statistic_details')->insert([
            'id' => '3',
            'id_statistics' => '1',
            'ikon' => 'icofont-list',
            'title' => '20',
            'subtitle' => 'Rasio Perceraian',
            'desc' => ' Menurut BPS, setiap tahunnya terjadi satu perceraian dalam setiap lima pernikahan (20%). ',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('statistic_details')->insert([
            'id' => '4',
            'id_statistics' => '1',
            'ikon' => 'icofont-list',
            'title' => '46',
            'subtitle' => 'Rasio Penyebab Utama Perceraian',
            'desc' => 'Menurut Data Pengadilan Agama, pertengkaran adalah penyebab tertinggi dari kasus perceraian yaitu sebesar 46,6 persen.',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
