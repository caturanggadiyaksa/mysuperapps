<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategoriData = [
            [
                'name_kategori' => 'Category 1',
                'description' => 'Description for Category 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_kategori' => 'Category 2',
                'description' => 'Description for Category 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ];

        DB::table('kategori')->insert($kategoriData);
    }
}
