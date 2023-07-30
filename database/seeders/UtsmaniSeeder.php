<?php

namespace Database\Seeders;

use App\Models\Ustmani;
use Illuminate\Database\Seeder;

class UtsmaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = json_decode(file_get_contents('public/alquran/uthmani.json'), true);
        
        foreach ($data['verses'] as $verse) {
            Ustmani::create([
                'verse_key' => $verse['verse_key'],
                'arr_ustmani' => $verse['text_uthmani'],
            ]);

         
        }
    }
}
