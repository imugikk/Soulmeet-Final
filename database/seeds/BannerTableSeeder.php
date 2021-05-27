<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'id' => '1',
            'title' => 'Pingin ningkatin kualitas hubungan dengan pasanganmu?',
            'desc' => 'Ga perlu ragu! Yuk kita belajar bareng-bareng! Karena #SetiapHubunganSangatBerarti',
            'image' => 'https://image.freepik.com/free-vector/young-couple-enjoying-retro-party-happy-girl-guy-dancing-gramophone-flat-vector-illustration-entertainment-romance-fun-concept_74855-10202.jpg',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
