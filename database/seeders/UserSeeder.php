<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('catur12345'),
                'role' => 'admin',
            ],
            [
                'name' => 'Catur Angga',
                'email' => 'catur@gmail.com',
                'password' => Hash::make('angga12345'),
                'role' => 'user',
            ],
            [
                'name' => 'Super admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('catur12345'),
                'role' => 'admin',
            ],
            [
                'name' => 'adiyaksa',
                'email' => 'adiyaksa@gmail.com',
                'password' => Hash::make('angga12345'),
                'role' => 'user',
            ],
            
        ];

        DB::table('users')->insert($users);
    }
}
