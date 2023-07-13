<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surah;
use App\Models\Ayat;




class QuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = json_decode(file_get_contents('public/alquran/surah/data.json'), true);
        
        foreach ($data as $surahData) {
            $surah = Surah::create([
                'surah_number' => $surahData['nomor'],
                'asma' => $surahData['asma'],
                'name' => $surahData['nama'],
                'arti' => $surahData['arti'],
                'jumlah_ayat' => $surahData['ayat'],
                'no_urut_wahyu' => $surahData['urut'],
                'tempat_turun' => $surahData['type'],
                'ruku' => $surahData['rukuk'],
                'keterangan' => $surahData['keterangan'],
                'audio' => $surahData['audio'],
            ]);

         
        }
    }
}
