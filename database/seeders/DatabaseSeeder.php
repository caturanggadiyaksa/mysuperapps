<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(UserSeeder::class);
        $this->call(NavigationSeeder::class);
        $this->call(QuranSeeder::class);
        $this->call(AyatSeeder::class);
        $this->call(AuthorizedAppsSeeder::class);


    }
}
