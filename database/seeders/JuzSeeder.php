<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\Juz;

class JuzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jsonFile = 'public/alquran/juzs.json';
        $jsonData = File::get($jsonFile);
        $juzsData = json_decode($jsonData, true)['juzs'];
    
        foreach ($juzsData as $juzData) {
            // Convert the 'verse_mapping' array to a JSON string
            $juzData['verse_mapping'] = json_encode($juzData['verse_mapping']);
    
            Juz::create($juzData);
        }
       
    }
}
