<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBlogSeeder extends Seeder
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
                'name' => 'user',
                'email' => 'catur@gmail.com',
                'password' => Hash::make('user12345'),
                'role' => 'user',
            ],
            [
                'name' => 'Super admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin123'),
                'role' => 'admin',
            ],
          
            
        ];
        DB::connection('mysql_blog')->table('users')->insert($users);
        
    }
}
