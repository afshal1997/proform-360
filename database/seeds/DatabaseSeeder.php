<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    final public function run(): void
    {
        $this->call([
            RoleTableSeeder::class, SettingTableSeeder::class, UserTableSeeder::class, HomeSeeder::class, PricingSeeder::class, HomeCardSeeder::class
        ]);
    }
}
