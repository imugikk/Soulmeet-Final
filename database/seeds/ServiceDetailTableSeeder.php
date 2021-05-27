<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ServiceDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_details')->insert([
            'id' => '1',
            'ikon' => 'bx bxs-book-heart',
            'title' => 'Kerahasiaan Terjamin',
            'desc' => 'Kerahasiaan dan kesejahteraan kamu adalah prioritas nomor satu Soulmeet',
            'id_services' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('service_details')->insert([
            'id' => '2',
            'ikon' => 'bx bxs-videos',
            'title' => 'Kelas Daring dan Webinar',
            'desc' => 'Pembelajaran daring on-demand dengan video-video keren dari Soulmeet. Tersedia 24/7!',
            'id_services' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('service_details')->insert([
            'id' => '3',
            'ikon' => 'bx bxs-phone-call',
            'title' => 'Konsultasi Daring',
            'desc' => 'Layanan konsultasi 1-on-couple dengan Psikolog berpengalaman Soulmeet',
            'id_services' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('service_details')->insert([
            'id' => '4',
            'ikon' => 'bx bxs-group',
            'title' => 'Blog dan Artikel Gratis Seputar Pernikahan',
            'desc' => 'Tips dan trik untuk mengelola sebuah hubungan yang sehat',
            'id_services' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
