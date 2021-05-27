<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FaqDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq_details')->insert([
            'id' => '1',
            'questions' => 'Apa itu Soulmeet?',
            'answers' => 'Soulmeet adalah cara kekinian belajar ilmu tentang hubungan. Konten-konten Soulmeet dapat dilakukan kapanpun dan dimanapun karena bersifat on-demand.',
            'faq_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('faq_details')->insert([
            'id' => '2',
            'questions' => 'Kenapa harus memilih Soulmeet?',
            'answers' => 'Personalisasi konten sesuai kebutuhanmu. Pilih sendiri konten yang kamu inginkan.',
            'faq_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('faq_details')->insert([
            'id' => '3',
            'questions' => 'Apa saja Layanan apa yang ada di Soulmeet?',
            'answers' => 'Saat ini Soulmeet menyediakan layanan kelas pra-nikah, on demand, e-counseling, dan rubrik tanya jawab seputar pra-nikah.',
            'faq_id' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
