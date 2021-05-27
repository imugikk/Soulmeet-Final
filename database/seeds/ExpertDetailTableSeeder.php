<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExpertDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expert_details')->insert([
            'id' => '1',
            'name' => 'Walter White',
            'position' => 'Psikolog Klinis',
            'image' => 'assets/img/team/team-1.jpg',
            'id_experts' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_details')->insert([
            'id' => '2',
            'name' => 'Sarah Jhonson',
            'position' => 'Psikiater',
            'image' => 'assets/img/team/team-2.jpg',
            'id_experts' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_details')->insert([
            'id' => '3',
            'name' => 'Sarah Jhonson',
            'position' => 'Psikiater',
            'image' => 'assets/img/team/team-3.jpg',
            'id_experts' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('expert_details')->insert([
            'id' => '4',
            'name' => 'Amanda Jepson',
            'position' => 'Penasihat Hukum',
            'image' => 'assets/img/team/team-4.jpg',
            'id_experts' => '1',
            'st' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
