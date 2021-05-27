<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BannerTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(SosmedTableSeeder::class);
        $this->call(CompanySosmedTableSeeder::class);
        $this->call(ExpertTableSeeder::class);
        $this->call(ExpertDetailTableSeeder::class);
        $this->call(ExpertSosmedTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(FaqDetailTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(PricingTableSeeder::class);
        $this->call(PricingDetailTableSeeder::class);
        $this->call(PricingItemTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(ServiceDetailTableSeeder::class);
        $this->call(StatisticTableSeeder::class);
        $this->call(StatisticDetailTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
