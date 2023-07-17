<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuthorizedApp;
use Illuminate\Support\Str;

class AuthorizedAppsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Menghapus data yang ada sebelumnya (jika ada)
        AuthorizedApp::truncate();


        // Menambahkan data aplikasi yang diizinkan
        AuthorizedApp::create([
            'client_id' => Str::random(40),
            'client_secret' => Str::random(60),
            'name' => 'Aplikasi Laravel',
            'redirect_uri' => 'http://127.0.0.1:8000',
            'api_key' => Str::random(40),
        ]);

        AuthorizedApp::create([
            'client_id' => Str::random(40),
            'client_secret' => Str::random(60),
            'name' => 'Nama Aplikasi 2',
            'redirect_uri' => 'http://localhost:3000',
            'api_key' => Str::random(40),
        ]);

    }
}
