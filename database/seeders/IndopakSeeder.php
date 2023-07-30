<?php

namespace Database\Seeders;

use App\Models\Indopak;
use Illuminate\Database\Seeder;


class IndopakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = json_decode(file_get_contents('public/alquran/indopak.json'), true);
        
        foreach ($data['verses'] as $verse) {
            Indopak::create([
                'verse_key' => $verse['verse_key'],
                'arr_indopak' => $verse['text_indopak'],
            ]);

         
        }
    }
}
