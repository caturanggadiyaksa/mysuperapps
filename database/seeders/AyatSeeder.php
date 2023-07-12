<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ayat;

class AyatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //alfatihah
        $alfatihah = json_decode(file_get_contents('Al Fatihah.json'), true);
        foreach ($alfatihah as $alfatihah) {
            Ayat::create([
                'surah_id' => '1',
                'ayat_number' => $alfatihah['nomor'],
                'isi_ayat' => $alfatihah['ar'],
                'text' => $alfatihah['id'],
                'translation' => $alfatihah['tr'],
            ]);
        }


        // Al Baqarah
        $alBaqarah = json_decode(file_get_contents('Al Baqarah.json'), true);
        foreach ($alBaqarah as $alBaqarah) {
            Ayat::create([
                'surah_id' => '2',
                'ayat_number' => $alBaqarah['nomor'],
                'isi_ayat' => $alBaqarah['ar'],
                'text' => $alBaqarah['id'],
                'translation' => $alBaqarah['tr'],
            ]);
        }



        // Ali Imran
        $aliImran = json_decode(file_get_contents('Ali Imran.json'), true);
        foreach ($aliImran as $aliImran) {
            Ayat::create([
                'surah_id' => '3',
                'ayat_number' => $aliImran['nomor'],
                'isi_ayat' => $aliImran['ar'],
                'text' => $aliImran['id'],
                'translation' => $aliImran['tr'],
            ]);
        }


        // An Nisaa
        $anNisaa = json_decode(file_get_contents('An Nisaa.json'), true);
        foreach ($anNisaa as $anNisaa) {
            Ayat::create([
                'surah_id' => '4',
                'ayat_number' => $anNisaa['nomor'],
                'isi_ayat' => $anNisaa['ar'],
                'text' => $anNisaa['id'],
                'translation' => $anNisaa['tr'],
            ]);
        }

        // Al Maidah
        $alMaidah = json_decode(file_get_contents('Al Maidah.json'), true);
        foreach ($alMaidah as $alMaidah) {
            Ayat::create([
                'surah_id' => '5',
                'ayat_number' => $alMaidah['nomor'],
                'isi_ayat' => $alMaidah['ar'],
                'text' => $alMaidah['id'],
                'translation' => $alMaidah['tr'],
            ]);
        }

        // Al An'am
        $alAnam = json_decode(file_get_contents('Al Anam.json'), true);
        foreach ($alAnam as $alAnam) {
            Ayat::create([
                'surah_id' => '6',
                'ayat_number' => $alAnam['nomor'],
                'isi_ayat' => $alAnam['ar'],
                'text' => $alAnam['id'],
                'translation' => $alAnam['tr'],
            ]);
        }


        // Al Araf
        $alAraf = json_decode(file_get_contents('Al Araf.json'), true);
        foreach ($alAraf as $alAraf) {
            Ayat::create([
                'surah_id' => '7',
                'ayat_number' => $alAraf['nomor'],
                'isi_ayat' => $alAraf['ar'],
                'text' => $alAraf['id'],
                'translation' => $alAraf['tr'],
            ]);
        }


        // Al Anfaal
        $alAnfaal = json_decode(file_get_contents('Al Anfaal.json'), true);
        foreach ($alAnfaal as $alAnfaal) {
            Ayat::create([
                'surah_id' => '8',
                'ayat_number' => $alAnfaal['nomor'],
                'isi_ayat' => $alAnfaal['ar'],
                'text' => $alAnfaal['id'],
                'translation' => $alAnfaal['tr'],
            ]);
        }


        // At Taubah
        $atTaubah = json_decode(file_get_contents('At Taubah.json'), true);
        foreach ($atTaubah as $atTaubah) {
            Ayat::create([
                'surah_id' => '9',
                'ayat_number' => $atTaubah['nomor'],
                'isi_ayat' => $atTaubah['ar'],
                'text' => $atTaubah['id'],
                'translation' => $atTaubah['tr'],
            ]);
        }


        // Yunus
        $yunus = json_decode(file_get_contents('Yunus.json'), true);
        foreach ($yunus as $yunus) {
            Ayat::create([
                'surah_id' => '10',
                'ayat_number' => $yunus['nomor'],
                'isi_ayat' => $yunus['ar'],
                'text' => $yunus['id'],
                'translation' => $yunus['tr'],
            ]);
        }


        // Huud
        $huud = json_decode(file_get_contents('Huud.json'), true);
        foreach ($huud as $huud) {
            Ayat::create([
                'surah_id' => '11',
                'ayat_number' => $huud['nomor'],
                'isi_ayat' => $huud['ar'],
                'text' => $huud['id'],
                'translation' => $huud['tr'],
            ]);
        }


        // Yusuf
        $yusuf = json_decode(file_get_contents('Yusuf.json'), true);
        foreach ($yusuf as $yusuf) {
            Ayat::create([
                'surah_id' => '12',
                'ayat_number' => $yusuf['nomor'],
                'isi_ayat' => $yusuf['ar'],
                'text' => $yusuf['id'],
                'translation' => $yusuf['tr'],
            ]);
        }


        // Ar Radu
        $arRadu = json_decode(file_get_contents('Ar Radu.json'), true);
        foreach ($arRadu as $arRadu) {
            Ayat::create([
                'surah_id' => '13',
                'ayat_number' => $arRadu['nomor'],
                'isi_ayat' => $arRadu['ar'],
                'text' => $arRadu['id'],
                'translation' => $arRadu['tr'],
            ]);
        }


        // Ibrahim
        $ibrahim = json_decode(file_get_contents('Ibrahim.json'), true);
        foreach ($ibrahim as $ibrahim) {
            Ayat::create([
                'surah_id' => '14',
                'ayat_number' => $ibrahim['nomor'],
                'isi_ayat' => $ibrahim['ar'],
                'text' => $ibrahim['id'],
                'translation' => $ibrahim['tr'],
            ]);
        }




        // Al Hijr
        $alHijr = json_decode(file_get_contents('Al Hijr.json'), true);
        foreach ($alHijr as $alHijr) {
            Ayat::create([
                'surah_id' => '15',
                'ayat_number' => $alHijr['nomor'],
                'isi_ayat' => $alHijr['ar'],
                'text' => $alHijr['id'],
                'translation' => $alHijr['tr'],
            ]);
        }




        // An Nahl
        $anNahl = json_decode(file_get_contents('An Nahl.json'), true);
        foreach ($anNahl as $anNahl) {
            Ayat::create([
                'surah_id' => '16',
                'ayat_number' => $anNahl['nomor'],
                'isi_ayat' => $anNahl['ar'],
                'text' => $anNahl['id'],
                'translation' => $anNahl['tr'],
            ]);
        }




        // Al Israa
        $alIsraa = json_decode(file_get_contents('Al Israa.json'), true);
        foreach ($alIsraa as $alIsraa) {
            Ayat::create([
                'surah_id' => '17',
                'ayat_number' => $alIsraa['nomor'],
                'isi_ayat' => $alIsraa['ar'],
                'text' => $alIsraa['id'],
                'translation' => $alIsraa['tr'],
            ]);
        }




        // Al Kahfi
        $alKahfi = json_decode(file_get_contents('Al Kahfi.json'), true);
        foreach ($alKahfi as $alKahfi) {
            Ayat::create([
                'surah_id' => '18',
                'ayat_number' => $alKahfi['nomor'],
                'isi_ayat' => $alKahfi['ar'],
                'text' => $alKahfi['id'],
                'translation' => $alKahfi['tr'],
            ]);
        }




        // Maryam
        $maryam = json_decode(file_get_contents('Maryam.json'), true);
        foreach ($maryam as $maryam) {
            Ayat::create([
                'surah_id' => '19',
                'ayat_number' => $maryam['nomor'],
                'isi_ayat' => $maryam['ar'],
                'text' => $maryam['id'],
                'translation' => $maryam['tr'],
            ]);
        }





        // Thaahaa
        $thaahaa = json_decode(file_get_contents('Thaahaa.json'), true);
        foreach ($thaahaa as $thaahaa) {
            Ayat::create([
                'surah_id' => '20',
                'ayat_number' => $thaahaa['nomor'],
                'isi_ayat' => $thaahaa['ar'],
                'text' => $thaahaa['id'],
                'translation' => $thaahaa['tr'],
            ]);
        }




        // Al Anbiyaa
        $alAnbiyaa = json_decode(file_get_contents('Al Anbiyaa.json'), true);
        foreach ($alAnbiyaa as $alAnbiyaa) {
            Ayat::create([
                'surah_id' => '21',
                'ayat_number' => $alAnbiyaa['nomor'],
                'isi_ayat' => $alAnbiyaa['ar'],
                'text' => $alAnbiyaa['id'],
                'translation' => $alAnbiyaa['tr'],
            ]);
        }




        // Al Hajj
        $alHajj = json_decode(file_get_contents('Al Hajj.json'), true);
        foreach ($alHajj as $alHajj) {
            Ayat::create([
                'surah_id' => '22',
                'ayat_number' => $alHajj['nomor'],
                'isi_ayat' => $alHajj['ar'],
                'text' => $alHajj['id'],
                'translation' => $alHajj['tr'],
            ]);
        }




        // Al Muminun
        $alMuminun = json_decode(file_get_contents('Al Muminun.json'), true);
        foreach ($alMuminun as $alMuminun) {
            Ayat::create([
                'surah_id' => '23',
                'ayat_number' => $alMuminun['nomor'],
                'isi_ayat' => $alMuminun['ar'],
                'text' => $alMuminun['id'],
                'translation' => $alMuminun['tr'],
            ]);
        }




        // An Nuur
        $anNuur = json_decode(file_get_contents('An Nuur.json'), true);
        foreach ($anNuur as $anNuur) {
            Ayat::create([
                'surah_id' => '24',
                'ayat_number' => $anNuur['nomor'],
                'isi_ayat' => $anNuur['ar'],
                'text' => $anNuur['id'],
                'translation' => $anNuur['tr'],
            ]);
        }





        // Al Furqaan
        $alFurqaan = json_decode(file_get_contents('Al Furqaan.json'), true);
        foreach ($alFurqaan as $alFurqaan) {
            Ayat::create([
                'surah_id' => '25',
                'ayat_number' => $alFurqaan['nomor'],
                'isi_ayat' => $alFurqaan['ar'],
                'text' => $alFurqaan['id'],
                'translation' => $alFurqaan['tr'],
            ]);
        }




        // Asy Syuara
        $asySyuara = json_decode(file_get_contents('Asy Syuara.json'), true);
        foreach ($asySyuara as $asySyuara) {
            Ayat::create([
                'surah_id' => '26',
                'ayat_number' => $asySyuara['nomor'],
                'isi_ayat' => $asySyuara['ar'],
                'text' => $asySyuara['id'],
                'translation' => $asySyuara['tr'],
            ]);
        }




        // An Naml
        $anNaml = json_decode(file_get_contents('An Naml.json'), true);
        foreach ($anNaml as $anNaml) {
            Ayat::create([
                'surah_id' => '27',
                'ayat_number' => $anNaml['nomor'],
                'isi_ayat' => $anNaml['ar'],
                'text' => $anNaml['id'],
                'translation' => $anNaml['tr'],
            ]);
        }





        // Al Qashash
        $alQashash = json_decode(file_get_contents('Al Qashash.json'), true);
        foreach ($alQashash as $alQashash) {
            Ayat::create([
                'surah_id' => '28',
                'ayat_number' => $alQashash['nomor'],
                'isi_ayat' => $alQashash['ar'],
                'text' => $alQashash['id'],
                'translation' => $alQashash['tr'],
            ]);
        }




        // Al Ankabut
        $alAnkabut = json_decode(file_get_contents('Al Ankabut.json'), true);
        foreach ($alAnkabut as $alAnkabut) {
            Ayat::create([
                'surah_id' => '29',
                'ayat_number' => $alAnkabut['nomor'],
                'isi_ayat' => $alAnkabut['ar'],
                'text' => $alAnkabut['id'],
                'translation' => $alAnkabut['tr'],
            ]);
        }



        // Ar Ruum
        $arRuum = json_decode(file_get_contents('Ar Ruum.json'), true);
        foreach ($arRuum as $arRuum) {
            Ayat::create([
                'surah_id' => '30',
                'ayat_number' => $arRuum['nomor'],
                'isi_ayat' => $arRuum['ar'],
                'text' => $arRuum['id'],
                'translation' => $arRuum['tr'],
            ]);
        }





        // Luqman
        $Luqman = json_decode(file_get_contents('Luqman.json'), true);
        foreach ($Luqman as $Luqman) {
            Ayat::create([
                'surah_id' => '31',
                'ayat_number' => $Luqman['nomor'],
                'isi_ayat' => $Luqman['ar'],
                'text' => $Luqman['id'],
                'translation' => $Luqman['tr'],
            ]);
        }





        // As Sajdah
        $asSajdah = json_decode(file_get_contents('As Sajdah.json'), true);
        foreach ($asSajdah as $asSajdah) {
            Ayat::create([
                'surah_id' => '32',
                'ayat_number' => $asSajdah['nomor'],
                'isi_ayat' => $asSajdah['ar'],
                'text' => $asSajdah['id'],
                'translation' => $asSajdah['tr'],
            ]);
        }





        // Al Ahzab
        $alAhzab = json_decode(file_get_contents('Al Ahzab.json'), true);
        foreach ($alAhzab as $alAhzab) {
            Ayat::create([
                'surah_id' => '33',
                'ayat_number' => $alAhzab['nomor'],
                'isi_ayat' => $alAhzab['ar'],
                'text' => $alAhzab['id'],
                'translation' => $alAhzab['tr'],
            ]);
        }




        // Saba
        $saba = json_decode(file_get_contents('Saba.json'), true);
        foreach ($saba as $saba) {
            Ayat::create([
                'surah_id' => '34',
                'ayat_number' => $saba['nomor'],
                'isi_ayat' => $saba['ar'],
                'text' => $saba['id'],
                'translation' => $saba['tr'],
            ]);
        }


        // Faathir
        $faathir = json_decode(file_get_contents('Faathir.json'), true);
        foreach ($faathir as $faathir) {
            Ayat::create([
                'surah_id' => '35',
                'ayat_number' => $faathir['nomor'],
                'isi_ayat' => $faathir['ar'],
                'text' => $faathir['id'],
                'translation' => $faathir['tr'],
            ]);
        }


        // YaSin
        $yaSin = json_decode(file_get_contents('YaSin.json'), true);
        foreach ($yaSin as $yaSin) {
            Ayat::create([
                'surah_id' => '36',
                'ayat_number' => $yaSin['nomor'],
                'isi_ayat' => $yaSin['ar'],
                'text' => $yaSin['id'],
                'translation' => $yaSin['tr'],
            ]);
        }



        //  Ash Shaaffat
        $ashShaaffat = json_decode(file_get_contents('Ash Shaaffat.json'), true);
        foreach ($ashShaaffat as $ashShaaffat) {
            Ayat::create([
                'surah_id' => '37',
                'ayat_number' => $ashShaaffat['nomor'],
                'isi_ayat' => $ashShaaffat['ar'],
                'text' => $ashShaaffat['id'],
                'translation' => $ashShaaffat['tr'],
            ]);
        }



        // Shaad
        $shaad = json_decode(file_get_contents('Shaad.json'), true);
        foreach ($shaad as $shaad) {
            Ayat::create([
                'surah_id' => '38',
                'ayat_number' => $shaad['nomor'],
                'isi_ayat' => $shaad['ar'],
                'text' => $shaad['id'],
                'translation' => $shaad['tr'],
            ]);
        }





        // Az Zumar
        $azZumar = json_decode(file_get_contents('Az Zumar.json'), true);
        foreach ($azZumar as $azZumar) {
            Ayat::create([
                'surah_id' => '39',
                'ayat_number' => $azZumar['nomor'],
                'isi_ayat' => $azZumar['ar'],
                'text' => $azZumar['id'],
                'translation' => $azZumar['tr'],
            ]);
        }





        // Al Ghaafir
        $alGhaafir = json_decode(file_get_contents('Al Ghaafir.json'), true);
        foreach ($alGhaafir as $alGhaafir) {
            Ayat::create([
                'surah_id' => '40',
                'ayat_number' => $alGhaafir['nomor'],
                'isi_ayat' => $alGhaafir['ar'],
                'text' => $alGhaafir['id'],
                'translation' => $alGhaafir['tr'],
            ]);
        }




        // Al Fushilat
        $alFushilat = json_decode(file_get_contents('Al Fushilat.json'), true);
        foreach ($alFushilat as $alFushilat) {
            Ayat::create([
                'surah_id' => '41',
                'ayat_number' => $alFushilat['nomor'],
                'isi_ayat' => $alFushilat['ar'],
                'text' => $alFushilat['id'],
                'translation' => $alFushilat['tr'],
            ]);
        }





        // Asy Syuura
        $asySyuura = json_decode(file_get_contents('Asy Syuura.json'), true);
        foreach ($asySyuura as $asySyuura) {
            Ayat::create([
                'surah_id' => '42',
                'ayat_number' => $asySyuura['nomor'],
                'isi_ayat' => $asySyuura['ar'],
                'text' => $asySyuura['id'],
                'translation' => $asySyuura['tr'],
            ]);
        }





        // Az Zukhruf
        $azZukhruf = json_decode(file_get_contents('Az Zukhruf.json'), true);
        foreach ($azZukhruf as $azZukhruf) {
            Ayat::create([
                'surah_id' => '43',
                'ayat_number' => $azZukhruf['nomor'],
                'isi_ayat' => $azZukhruf['ar'],
                'text' => $azZukhruf['id'],
                'translation' => $azZukhruf['tr'],
            ]);
        }





        // Ad Dukhaan
        $adDukhaan = json_decode(file_get_contents('Ad Dukhaan.json'), true);
        foreach ($adDukhaan as $adDukhaan) {
            Ayat::create([
                'surah_id' => '44',
                'ayat_number' => $adDukhaan['nomor'],
                'isi_ayat' => $adDukhaan['ar'],
                'text' => $adDukhaan['id'],
                'translation' => $adDukhaan['tr'],
            ]);
        }





        // Al Jaatsiyah
        $alJaatsiyah = json_decode(file_get_contents('Al Jaatsiyah.json'), true);
        foreach ($alJaatsiyah as $alJaatsiyah) {
            Ayat::create([
                'surah_id' => '45',
                'ayat_number' => $alJaatsiyah['nomor'],
                'isi_ayat' => $alJaatsiyah['ar'],
                'text' => $alJaatsiyah['id'],
                'translation' => $alJaatsiyah['tr'],
            ]);
        }






        // Al Ahqaaf
        $alAhqaaf = json_decode(file_get_contents('Al Ahqaaf.json'), true);
        foreach ($alAhqaaf as $alAhqaaf) {
            Ayat::create([
                'surah_id' => '46',
                'ayat_number' => $alAhqaaf['nomor'],
                'isi_ayat' => $alAhqaaf['ar'],
                'text' => $alAhqaaf['id'],
                'translation' => $alAhqaaf['tr'],
            ]);
        }




        // Muhammad
        $muhammad = json_decode(file_get_contents('Muhammad.json'), true);
        foreach ($muhammad as $muhammad) {
            Ayat::create([
                'surah_id' => '47',
                'ayat_number' => $muhammad['nomor'],
                'isi_ayat' => $muhammad['ar'],
                'text' => $muhammad['id'],
                'translation' => $muhammad['tr'],
            ]);
        }




        // Al Fath
        $alFath = json_decode(file_get_contents('Al Fath.json'), true);
        foreach ($alFath as $alFath) {
            Ayat::create([
                'surah_id' => '48',
                'ayat_number' => $alFath['nomor'],
                'isi_ayat' => $alFath['ar'],
                'text' => $alFath['id'],
                'translation' => $alFath['tr'],
            ]);
        }



        // Al Hujuraat
        $alHujuraat = json_decode(file_get_contents('Al Hujuraat.json'), true);
        foreach ($alHujuraat as $alHujuraat) {
            Ayat::create([
                'surah_id' => '49',
                'ayat_number' => $alHujuraat['nomor'],
                'isi_ayat' => $alHujuraat['ar'],
                'text' => $alHujuraat['id'],
                'translation' => $alHujuraat['tr'],
            ]);
        }

        // Qaaf
        $qaaf = json_decode(file_get_contents('Qaaf.json'), true);
        foreach ($qaaf as $qaaf) {
            Ayat::create([
                'surah_id' => '50',
                'ayat_number' => $qaaf['nomor'],
                'isi_ayat' => $qaaf['ar'],
                'text' => $qaaf['id'],
                'translation' => $qaaf['tr'],
            ]);
        }



        // Adz Dzaariyaat
        $adzDzaariyaat = json_decode(file_get_contents('Adz Dzaariyaat.json'), true);
        foreach ($adzDzaariyaat as $adzDzaariyaat) {
            Ayat::create([
                'surah_id' => '51',
                'ayat_number' => $adzDzaariyaat['nomor'],
                'isi_ayat' => $adzDzaariyaat['ar'],
                'text' => $adzDzaariyaat['id'],
                'translation' => $adzDzaariyaat['tr'],
            ]);
        }


        // Ath Thuur
        $athThuur = json_decode(file_get_contents('Ath Thuur.json'), true);
        foreach ($athThuur as $athThuur) {
            Ayat::create([
                'surah_id' => '52',
                'ayat_number' => $athThuur['nomor'],
                'isi_ayat' => $athThuur['ar'],
                'text' => $athThuur['id'],
                'translation' => $athThuur['tr'],
            ]);
        }



        // An Najm
        $anNajm = json_decode(file_get_contents('An Najm.json'), true);
        foreach ($anNajm as $anNajm) {
            Ayat::create([
                'surah_id' => '53',
                'ayat_number' => $anNajm['nomor'],
                'isi_ayat' => $anNajm['ar'],
                'text' => $anNajm['id'],
                'translation' => $anNajm['tr'],
            ]);
        }




        // Al Qamar
        $alQamar = json_decode(file_get_contents('Al Qamar.json'), true);
        foreach ($alQamar as $alQamar) {
            Ayat::create([
                'surah_id' => '54',
                'ayat_number' => $alQamar['nomor'],
                'isi_ayat' => $alQamar['ar'],
                'text' => $alQamar['id'],
                'translation' => $alQamar['tr'],
            ]);
        }



        // Ar Rahmaan
        $arRahmaan = json_decode(file_get_contents('Ar Rahmaan.json'), true);
        foreach ($arRahmaan as $arRahmaan) {
            Ayat::create([
                'surah_id' => '55',
                'ayat_number' => $arRahmaan['nomor'],
                'isi_ayat' => $arRahmaan['ar'],
                'text' => $arRahmaan['id'],
                'translation' => $arRahmaan['tr'],
            ]);
        }



        // Al Waaqi'ah
        $alWaaqiah = json_decode(file_get_contents('Al Waaqiah.json'), true);
        foreach ($alWaaqiah as $alWaaqiah) {
            Ayat::create([
                'surah_id' => '56',
                'ayat_number' => $alWaaqiah['nomor'],
                'isi_ayat' => $alWaaqiah['ar'],
                'text' => $alWaaqiah['id'],
                'translation' => $alWaaqiah['tr'],
            ]);
        }




        // Al Hadiid
        $alHadiid = json_decode(file_get_contents('Al Hadiid.json'), true);
        foreach ($alHadiid as $alHadiid) {
            Ayat::create([
                'surah_id' => '57',
                'ayat_number' => $alHadiid['nomor'],
                'isi_ayat' => $alHadiid['ar'],
                'text' => $alHadiid['id'],
                'translation' => $alHadiid['tr'],
            ]);
        }



        // Al Mujaadalah
        $alMujaadalah = json_decode(file_get_contents('Al Mujaadalah.json'), true);
        foreach ($alMujaadalah as $alMujaadalah) {
            Ayat::create([
                'surah_id' => '58',
                'ayat_number' => $alMujaadalah['nomor'],
                'isi_ayat' => $alMujaadalah['ar'],
                'text' => $alMujaadalah['id'],
                'translation' => $alMujaadalah['tr'],
            ]);
        }

        //Al Hasyr
        $alHasyr = json_decode(file_get_contents('Al Hasyr.json'), true);
        foreach ($alHasyr as $alHasyr) {
            Ayat::create([
                'surah_id' => '59',
                'ayat_number' => $alHasyr['nomor'],
                'isi_ayat' => $alHasyr['ar'],
                'text' => $alHasyr['id'],
                'translation' => $alHasyr['tr'],
            ]);
        }

        // Al mumtahanah
        $almumtahanah = json_decode(file_get_contents('Al mumtahanah.json'), true);
        foreach ($almumtahanah as $almumtahanah) {
            Ayat::create([
                'surah_id' => '60',
                'ayat_number' => $almumtahanah['nomor'],
                'isi_ayat' => $almumtahanah['ar'],
                'text' => $almumtahanah['id'],
                'translation' => $almumtahanah['tr'],
            ]);
        }


        //Ash Shaff
        $ashShaff = json_decode(file_get_contents('Ash Shaff.json'), true);
        foreach ($ashShaff as $ashShaff) {
            Ayat::create([
                'surah_id' => '61',
                'ayat_number' => $ashShaff['nomor'],
                'isi_ayat' => $ashShaff['ar'],
                'text' => $ashShaff['id'],
                'translation' => $ashShaff['tr'],
            ]);
        }


        // Al Jumuah
        $alJumuah = json_decode(file_get_contents('Al Jumuah.json'), true);
        foreach ($alJumuah as $alJumuah) {
            Ayat::create([
                'surah_id' => '62',
                'ayat_number' => $alJumuah['nomor'],
                'isi_ayat' => $alJumuah['ar'],
                'text' => $alJumuah['id'],
                'translation' => $alJumuah['tr'],
            ]);
        }


        // Al Munafiqun
        $alMunafiqun = json_decode(file_get_contents('Al Munafiqun.json'), true);
        foreach ($alMunafiqun as $alMunafiqun) {
            Ayat::create([
                'surah_id' => '63',
                'ayat_number' => $alMunafiqun['nomor'],
                'isi_ayat' => $alMunafiqun['ar'],
                'text' => $alMunafiqun['id'],
                'translation' => $alMunafiqun['tr'],
            ]);
        }


        // Ath Taghabun
        $athTaghabun = json_decode(file_get_contents('Ath Taghabun.json'), true);
        foreach ($athTaghabun as $athTaghabun) {
            Ayat::create([
                'surah_id' => '64',
                'ayat_number' => $athTaghabun['nomor'],
                'isi_ayat' => $athTaghabun['ar'],
                'text' => $athTaghabun['id'],
                'translation' => $athTaghabun['tr'],
            ]);
        }

        //Ath Thalaaq
        $athThalaaq = json_decode(file_get_contents('Ath Thalaaq.json'), true);
        foreach ($athThalaaq as $athThalaaq) {
            Ayat::create([
                'surah_id' => '65',
                'ayat_number' => $athThalaaq['nomor'],
                'isi_ayat' => $athThalaaq['ar'],
                'text' => $athThalaaq['id'],
                'translation' => $athThalaaq['tr'],
            ]);
        }


        // At Tahriim
        $atTahriim = json_decode(file_get_contents('At Tahriim.json'), true);
        foreach ($atTahriim as $atTahriim) {
            Ayat::create([
                'surah_id' => '66',
                'ayat_number' => $atTahriim['nomor'],
                'isi_ayat' => $atTahriim['ar'],
                'text' => $atTahriim['id'],
                'translation' => $atTahriim['tr'],
            ]);
        }


        // Al Mulk
        $alMulk = json_decode(file_get_contents('Al Mulk.json'), true);
        foreach ($alMulk as $alMulk) {
            Ayat::create([
                'surah_id' => '67',
                'ayat_number' => $alMulk['nomor'],
                'isi_ayat' => $alMulk['ar'],
                'text' => $alMulk['id'],
                'translation' => $alMulk['tr'],
            ]);
        }



        // Al Qalam
        $alQalam = json_decode(file_get_contents('Al Qalam.json'), true);
        foreach ($alQalam as $alQalam) {
            Ayat::create([
                'surah_id' => '68',
                'ayat_number' => $alQalam['nomor'],
                'isi_ayat' => $alQalam['ar'],
                'text' => $alQalam['id'],
                'translation' => $alQalam['tr'],
            ]);
        }



        // Al Haaqqah
        $alHaaqqah = json_decode(file_get_contents('Al Haaqqah.json'), true);
        foreach ($alHaaqqah as $alHaaqqah) {
            Ayat::create([
                'surah_id' => '69',
                'ayat_number' => $alHaaqqah['nomor'],
                'isi_ayat' => $alHaaqqah['ar'],
                'text' => $alHaaqqah['id'],
                'translation' => $alHaaqqah['tr'],
            ]);
        }



        // Al Ma'aarij
        $alMaaarij = json_decode(file_get_contents('Al Maaarij.json'), true);
        foreach ($alMaaarij as $alMaaarij) {
            Ayat::create([
                'surah_id' => '70',
                'ayat_number' => $alMaaarij['nomor'],
                'isi_ayat' => $alMaaarij['ar'],
                'text' => $alMaaarij['id'],
                'translation' => $alMaaarij['tr'],
            ]);
        }


        // Nuh
        $nuh = json_decode(file_get_contents('Nuh.json'), true);
        foreach ($nuh as $nuh) {
            Ayat::create([
                'surah_id' => '71',
                'ayat_number' => $nuh['nomor'],
                'isi_ayat' => $nuh['ar'],
                'text' => $nuh['id'],
                'translation' => $nuh['tr'],
            ]);
        }


        // Al Jin
        $alJin = json_decode(file_get_contents('Al Jin.json'), true);
        foreach ($alJin as $alJin) {
            Ayat::create([
                'surah_id' => '72',
                'ayat_number' => $alJin['nomor'],
                'isi_ayat' => $alJin['ar'],
                'text' => $alJin['id'],
                'translation' => $alJin['tr'],
            ]);
        }



        // Al Muzammil
        $alMuzammil = json_decode(file_get_contents('Al Muzammil.json'), true);
        foreach ($alMuzammil as $alMuzammil) {
            Ayat::create([
                'surah_id' => '73',
                'ayat_number' => $alMuzammil['nomor'],
                'isi_ayat' => $alMuzammil['ar'],
                'text' => $alMuzammil['id'],
                'translation' => $alMuzammil['tr'],
            ]);
        }



        // Al Muddastir
        $alMuddastir = json_decode(file_get_contents('Al Muddastir.json'), true);
        foreach ($alMuddastir as $alMuddastir) {
            Ayat::create([
                'surah_id' => '74',
                'ayat_number' => $alMuddastir['nomor'],
                'isi_ayat' => $alMuddastir['ar'],
                'text' => $alMuddastir['id'],
                'translation' => $alMuddastir['tr'],
            ]);
        }



        // Al Qiyaamah
        $alQiyaamah = json_decode(file_get_contents('Al Qiyaamah.json'), true);
        foreach ($alQiyaamah as $alQiyaamah) {
            Ayat::create([
                'surah_id' => '75',
                'ayat_number' => $alQiyaamah['nomor'],
                'isi_ayat' => $alQiyaamah['ar'],
                'text' => $alQiyaamah['id'],
                'translation' => $alQiyaamah['tr'],
            ]);
        }


        // Al Insaan
        $alInsaan = json_decode(file_get_contents('Al Insaan.json'), true);
        foreach ($alInsaan as $alInsaan) {
            Ayat::create([
                'surah_id' => '76',
                'ayat_number' => $alInsaan['nomor'],
                'isi_ayat' => $alInsaan['ar'],
                'text' => $alInsaan['id'],
                'translation' => $alInsaan['tr'],
            ]);
        }


        // Al Mursalaat
        $alMursalaat = json_decode(file_get_contents('Al Mursalaat.json'), true);
        foreach ($alMursalaat as $alMursalaat) {
            Ayat::create([
                'surah_id' => '77',
                'ayat_number' => $alMursalaat['nomor'],
                'isi_ayat' => $alMursalaat['ar'],
                'text' => $alMursalaat['id'],
                'translation' => $alMursalaat['tr'],
            ]);
        }



        // An Naba
        $anNaba = json_decode(file_get_contents('An Naba.json'), true);
        foreach ($anNaba as $anNaba) {
            Ayat::create([
                'surah_id' => '78',
                'ayat_number' => $anNaba['nomor'],
                'isi_ayat' => $anNaba['ar'],
                'text' => $anNaba['id'],
                'translation' => $anNaba['tr'],
            ]);
        }



        // An Naaziat
        $anNaaziat = json_decode(file_get_contents('An Naaziat.json'), true);
        foreach ($anNaaziat as $anNaaziat) {
            Ayat::create([
                'surah_id' => '79',
                'ayat_number' => $anNaaziat['nomor'],
                'isi_ayat' => $anNaaziat['ar'],
                'text' => $anNaaziat['id'],
                'translation' => $anNaaziat['tr'],
            ]);
        }


        // Abasa
        $abasa = json_decode(file_get_contents('Abasa.json'), true);
        foreach ($abasa as $abasa) {
            Ayat::create([
                'surah_id' => '80',
                'ayat_number' => $abasa['nomor'],
                'isi_ayat' => $abasa['ar'],
                'text' => $abasa['id'],
                'translation' => $abasa['tr'],
            ]);
        }


        // At Takwiir
        $atTakwiir = json_decode(file_get_contents('At Takwiir.json'), true);
        foreach ($atTakwiir as $atTakwiir) {
            Ayat::create([
                'surah_id' => '81',
                'ayat_number' => $atTakwiir['nomor'],
                'isi_ayat' => $atTakwiir['ar'],
                'text' => $atTakwiir['id'],
                'translation' => $atTakwiir['tr'],
            ]);
        }



        // Al Infithar
        $alInfithar = json_decode(file_get_contents('Al Infithar.json'), true);
        foreach ($alInfithar as $alInfithar) {
            Ayat::create([
                'surah_id' => '82',
                'ayat_number' => $alInfithar['nomor'],
                'isi_ayat' => $alInfithar['ar'],
                'text' => $alInfithar['id'],
                'translation' => $alInfithar['tr'],
            ]);
        }



        //Al Muthaffifin
        $alMuthaffifin = json_decode(file_get_contents('Al Muthaffifin.json'), true);
        foreach ($alMuthaffifin as $alMuthaffifin) {
            Ayat::create([
                'surah_id' => '83',
                'ayat_number' => $alMuthaffifin['nomor'],
                'isi_ayat' => $alMuthaffifin['ar'],
                'text' => $alMuthaffifin['id'],
                'translation' => $alMuthaffifin['tr'],
            ]);
        }



        //Al Insyiqaq
        $alInsyiqaq = json_decode(file_get_contents('Al Insyiqaq.json'), true);
        foreach ($alInsyiqaq as $alInsyiqaq) {
            Ayat::create([
                'surah_id' => '84',
                'ayat_number' => $alInsyiqaq['nomor'],
                'isi_ayat' => $alInsyiqaq['ar'],
                'text' => $alInsyiqaq['id'],
                'translation' => $alInsyiqaq['tr'],
            ]);
        }



        // Al Buruuj
        $alBuruuj = json_decode(file_get_contents('Al Buruuj.json'), true);
        foreach ($alBuruuj as $alBuruuj) {
            Ayat::create([
                'surah_id' => '85',
                'ayat_number' => $alBuruuj['nomor'],
                'isi_ayat' => $alBuruuj['ar'],
                'text' => $alBuruuj['id'],
                'translation' => $alBuruuj['tr'],
            ]);
        }


        // Ath Thariq
        $athThariq = json_decode(file_get_contents('Ath Thariq.json'), true);
        foreach ($athThariq as $athThariq) {
            Ayat::create([
                'surah_id' => '86',
                'ayat_number' => $athThariq['nomor'],
                'isi_ayat' => $athThariq['ar'],
                'text' => $athThariq['id'],
                'translation' => $athThariq['tr'],
            ]);
        }


        // Al Alaa
        $alAlaa = json_decode(file_get_contents('Al Alaa.json'), true);
        foreach ($alAlaa as $alAlaa) {
            Ayat::create([
                'surah_id' => '87',
                'ayat_number' => $alAlaa['nomor'],
                'isi_ayat' => $alAlaa['ar'],
                'text' => $alAlaa['id'],
                'translation' => $alAlaa['tr'],
            ]);
        }


        // Al Ghaasyiah
        $alGhaasyiah = json_decode(file_get_contents('Al Ghaasyiah.json'), true);
        foreach ($alGhaasyiah as $alGhaasyiah) {
            Ayat::create([
                'surah_id' => '88',
                'ayat_number' => $alGhaasyiah['nomor'],
                'isi_ayat' => $alGhaasyiah['ar'],
                'text' => $alGhaasyiah['id'],
                'translation' => $alGhaasyiah['tr'],
            ]);
        }


        // Al Fajr
        $alFajr = json_decode(file_get_contents('Al Fajr.json'), true);
        foreach ($alFajr as $alFajr) {
            Ayat::create([
                'surah_id' => '89',
                'ayat_number' => $alFajr['nomor'],
                'isi_ayat' => $alFajr['ar'],
                'text' => $alFajr['id'],
                'translation' => $alFajr['tr'],
            ]);
        }


        // Al Balad
        $alBalad = json_decode(file_get_contents('Al Balad.json'), true);
        foreach ($alBalad as $alBalad) {
            Ayat::create([
                'surah_id' => '90',
                'ayat_number' => $alBalad['nomor'],
                'isi_ayat' => $alBalad['ar'],
                'text' => $alBalad['id'],
                'translation' => $alBalad['tr'],
            ]);
        }



        // Asy Syams
        $asySyams = json_decode(file_get_contents('Asy Syams.json'), true);
        foreach ($asySyams as $asySyams) {
            Ayat::create([
                'surah_id' => '91',
                'ayat_number' => $asySyams['nomor'],
                'isi_ayat' => $asySyams['ar'],
                'text' => $asySyams['id'],
                'translation' => $asySyams['tr'],
            ]);
        }


        // Al Lail
        $alLail = json_decode(file_get_contents('Al Lail.json'), true);
        foreach ($alLail as $alLail) {
            Ayat::create([
                'surah_id' => '92',
                'ayat_number' => $alLail['nomor'],
                'isi_ayat' => $alLail['ar'],
                'text' => $alLail['id'],
                'translation' => $alLail['tr'],
            ]);
        }


        // Adh Dhuhaa
        $adhDhuhaa = json_decode(file_get_contents('Adh Dhuhaa.json'), true);
        foreach ($adhDhuhaa as $adhDhuhaa) {
            Ayat::create([
                'surah_id' => '93',
                'ayat_number' => $adhDhuhaa['nomor'],
                'isi_ayat' => $adhDhuhaa['ar'],
                'text' => $adhDhuhaa['id'],
                'translation' => $adhDhuhaa['tr'],
            ]);
        }


        // Asy Syarh
        $asySyarh = json_decode(file_get_contents('Asy Syarh.json'), true);
        foreach ($asySyarh as $asySyarh) {
            Ayat::create([
                'surah_id' => '94',
                'ayat_number' => $asySyarh['nomor'],
                'isi_ayat' => $asySyarh['ar'],
                'text' => $asySyarh['id'],
                'translation' => $asySyarh['tr'],
            ]);
        }


        // At Tiin
        $atTiin = json_decode(file_get_contents('At Tiin.json'), true);
        foreach ($atTiin as $atTiin) {
            Ayat::create([
                'surah_id' => '95',
                'ayat_number' => $atTiin['nomor'],
                'isi_ayat' => $atTiin['ar'],
                'text' => $atTiin['id'],
                'translation' => $atTiin['tr'],
            ]);
        }


        // Al Alaq
        $alAlaq = json_decode(file_get_contents('Al Alaq.json'), true);
        foreach ($alAlaq as $alAlaq) {
            Ayat::create([
                'surah_id' => '96',
                'ayat_number' => $alAlaq['nomor'],
                'isi_ayat' => $alAlaq['ar'],
                'text' => $alAlaq['id'],
                'translation' => $alAlaq['tr'],
            ]);
        }


        // Al Qadr
        $alQadr = json_decode(file_get_contents('Al Qadr.json'), true);
        foreach ($alQadr as $alQadr) {
            Ayat::create([
                'surah_id' => '97',
                'ayat_number' => $alQadr['nomor'],
                'isi_ayat' => $alQadr['ar'],
                'text' => $alQadr['id'],
                'translation' => $alQadr['tr'],
            ]);
        }


        // Al Bayyinah
        $alBayyinah = json_decode(file_get_contents('Al Bayyinah.json'), true);
        foreach ($alBayyinah as $alBayyinah) {
            Ayat::create([
                'surah_id' => '98',
                'ayat_number' => $alBayyinah['nomor'],
                'isi_ayat' => $alBayyinah['ar'],
                'text' => $alBayyinah['id'],
                'translation' => $alBayyinah['tr'],
            ]);
        }


        // Az Zalzalah
        $azZalzalah = json_decode(file_get_contents('Az Zalzalah.json'), true);
        foreach ($azZalzalah as $azZalzalah) {
            Ayat::create([
                'surah_id' => '99',
                'ayat_number' => $azZalzalah['nomor'],
                'isi_ayat' => $azZalzalah['ar'],
                'text' => $azZalzalah['id'],
                'translation' => $azZalzalah['tr'],
            ]);
        }

        // Al Aadiyah
        $alAadiyah = json_decode(file_get_contents('Al Aadiyah.json'), true);
        foreach ($alAadiyah as $alAadiyah) {
            Ayat::create([
                'surah_id' => '100',
                'ayat_number' => $alAadiyah['nomor'],
                'isi_ayat' => $alAadiyah['ar'],
                'text' => $alAadiyah['id'],
                'translation' => $alAadiyah['tr'],
            ]);
        }


        // Al Qaariah
        $alQaariah = json_decode(file_get_contents('Al Qaariah.json'), true);
        foreach ($alQaariah as $alQaariah) {
            Ayat::create([
                'surah_id' => '101',
                'ayat_number' => $alQaariah['nomor'],
                'isi_ayat' => $alQaariah['ar'],
                'text' => $alQaariah['id'],
                'translation' => $alQaariah['tr'],
            ]);
        }


        //At Takaatsur
        $atTakaatsur = json_decode(file_get_contents('At Takaatsur.json'), true);
        foreach ($atTakaatsur as $atTakaatsur) {
            Ayat::create([
                'surah_id' => '102',
                'ayat_number' => $atTakaatsur['nomor'],
                'isi_ayat' => $atTakaatsur['ar'],
                'text' => $atTakaatsur['id'],
                'translation' => $atTakaatsur['tr'],
            ]);
        }


        // Al Ashr
        $alAshr = json_decode(file_get_contents('Al Ashr.json'), true);
        foreach ($alAshr as $alAshr) {
            Ayat::create([
                'surah_id' => '103',
                'ayat_number' => $alAshr['nomor'],
                'isi_ayat' => $alAshr['ar'],
                'text' => $alAshr['id'],
                'translation' => $alAshr['tr'],
            ]);
        }


        // Al Humazah
        $alHumazah = json_decode(file_get_contents('Al Humazah.json'), true);
        foreach ($alHumazah as $alHumazah) {
            Ayat::create([
                'surah_id' => '104',
                'ayat_number' => $alHumazah['nomor'],
                'isi_ayat' => $alHumazah['ar'],
                'text' => $alHumazah['id'],
                'translation' => $alHumazah['tr'],
            ]);
        }


        // Al Fiil
        $alFiil = json_decode(file_get_contents('Al Fiil.json'), true);
        foreach ($alFiil as $alFiil) {
            Ayat::create([
                'surah_id' => '105',
                'ayat_number' => $alFiil['nomor'],
                'isi_ayat' => $alFiil['ar'],
                'text' => $alFiil['id'],
                'translation' => $alFiil['tr'],
            ]);
        }


        // Quraisy
        $quraisy = json_decode(file_get_contents('Quraisy.json'), true);
        foreach ($quraisy as $quraisy) {
            Ayat::create([
                'surah_id' => '106',
                'ayat_number' => $quraisy['nomor'],
                'isi_ayat' => $quraisy['ar'],
                'text' => $quraisy['id'],
                'translation' => $quraisy['tr'],
            ]);
        }


        // Al Maauun
        $alMaauun = json_decode(file_get_contents('Al Maauun.json'), true);
        foreach ($alMaauun as $alMaauun) {
            Ayat::create([
                'surah_id' => '107',
                'ayat_number' => $alMaauun['nomor'],
                'isi_ayat' => $alMaauun['ar'],
                'text' => $alMaauun['id'],
                'translation' => $alMaauun['tr'],
            ]);
        }



        // Al Kautsar
        $alKautsar = json_decode(file_get_contents('Al Kautsar.json'), true);
        foreach ($alKautsar as $alKautsar) {
            Ayat::create([
                'surah_id' => '108',
                'ayat_number' => $alKautsar['nomor'],
                'isi_ayat' => $alKautsar['ar'],
                'text' => $alKautsar['id'],
                'translation' => $alKautsar['tr'],
            ]);
        }



        // Al Kafirun
        $alKafirun = json_decode(file_get_contents('Al Kafirun.json'), true);
        foreach ($alKafirun as $alKafirun) {
            Ayat::create([
                'surah_id' => '109',
                'ayat_number' => $alKafirun['nomor'],
                'isi_ayat' => $alKafirun['ar'],
                'text' => $alKafirun['id'],
                'translation' => $alKafirun['tr'],
            ]);
        }

        
        // An Nashr
        $anNashr = json_decode(file_get_contents('An Nashr.json'), true);
        foreach ($anNashr as $anNashr) {
            Ayat::create([
                'surah_id' => '110',
                'ayat_number' => $anNashr['nomor'],
                'isi_ayat' => $anNashr['ar'],
                'text' => $anNashr['id'],
                'translation' => $anNashr['tr'],
            ]);
        }



        //Al Lahab
        $alLahab = json_decode(file_get_contents('Al Lahab.json'), true);
        foreach ($alLahab as $alLahab) {
            Ayat::create([
                'surah_id' => '111',
                'ayat_number' => $alLahab['nomor'],
                'isi_ayat' => $alLahab['ar'],
                'text' => $alLahab['id'],
                'translation' => $alLahab['tr'],
            ]);
        }


        // Al Ikhlash
        $alIkhlash = json_decode(file_get_contents('Al Ikhlash.json'), true);
        foreach ($alIkhlash as $alIkhlash) {
            Ayat::create([
                'surah_id' => '112',
                'ayat_number' => $alIkhlash['nomor'],
                'isi_ayat' => $alIkhlash['ar'],
                'text' => $alIkhlash['id'],
                'translation' => $alIkhlash['tr'],
            ]);
        }


        // Al Falaq
        $alFalaq = json_decode(file_get_contents('Al Aadiyah.json'), true);
        foreach ($alFalaq as $alFalaq) {
            Ayat::create([
                'surah_id' => '113',
                'ayat_number' => $alFalaq['nomor'],
                'isi_ayat' => $alFalaq['ar'],
                'text' => $alFalaq['id'],
                'translation' => $alFalaq['tr'],
            ]);
        }

        // An Naas
        $anNaas = json_decode(file_get_contents('Al Aadiyah.json'), true);
        foreach ($anNaas as $anNaas) {
            Ayat::create([
                'surah_id' => '114',
                'ayat_number' => $anNaas['nomor'],
                'isi_ayat' => $anNaas['ar'],
                'text' => $anNaas['id'],
                'translation' => $anNaas['tr'],
            ]);
        }
    }
}
