<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExpertSosmedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expert_sosmeds')->insert([
            'id' => '1',
            'expert_detail_id' => '1',
            'sosmed_id' => '1',
            'url' => 'https://twitter.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '2',
            'expert_detail_id' => '1',
            'sosmed_id' => '2',
            'url' => 'https://facebook.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '3',
            'expert_detail_id' => '1',
            'sosmed_id' => '3',
            'url' => 'https://instagram.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '4',
            'expert_detail_id' => '1',
            'sosmed_id' => '4',
            'url' => 'https://linkedin.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '5',
            'expert_detail_id' => '2',
            'sosmed_id' => '1',
            'url' => 'https://twitter.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '6',
            'expert_detail_id' => '2',
            'sosmed_id' => '2',
            'url' => 'https://facebook.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '7',
            'expert_detail_id' => '2',
            'sosmed_id' => '3',
            'url' => 'https://instagram.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '8',
            'expert_detail_id' => '2',
            'sosmed_id' => '4',
            'url' => 'https://linkedin.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '9',
            'expert_detail_id' => '3',
            'sosmed_id' => '1',
            'url' => 'https://twitter.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '10',
            'expert_detail_id' => '3',
            'sosmed_id' => '2',
            'url' => 'https://facebook.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '11',
            'expert_detail_id' => '3',
            'sosmed_id' => '3',
            'url' => 'https://instagram.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '12',
            'expert_detail_id' => '3',
            'sosmed_id' => '4',
            'url' => 'https://linkedin.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '13',
            'expert_detail_id' => '4',
            'sosmed_id' => '1',
            'url' => 'https://twitter.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '14',
            'expert_detail_id' => '4',
            'sosmed_id' => '2',
            'url' => 'https://facebook.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '15',
            'expert_detail_id' => '4',
            'sosmed_id' => '3',
            'url' => 'https://instagram.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_sosmeds')->insert([
            'id' => '16',
            'expert_detail_id' => '4',
            'sosmed_id' => '4',
            'url' => 'https://linkedin.com',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
