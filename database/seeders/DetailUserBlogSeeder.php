<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUserBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('detail_user')->insert([
            'user_id' => '1',
            'first_name' => 'catur',
            'last_name' => 'angga',
            'alamat' => 'Jl. kenangan setu bekasi',
            'no_telp' => '089765345',
            'jenis_kelamin' => 'Laki-laki',
            'foto_profil' => 'fotoprofil.jpg',
        ]);

        DB::table('detail_user')->insert([
            'user_id' => '2',
            'first_name' => 'admin',
            'last_name' => 'super',
            'alamat' => 'Jl. kenangan setu bekasi',
            'no_telp' => '089765345',
            'jenis_kelamin' => 'Laki-laki',
            'foto_profil' => 'foto.jpg',
            
            
        ]);

       
    }
}
