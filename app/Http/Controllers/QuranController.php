<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surah;
use App\Models\Ayat;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surahs = Surah::with('ayats')->get();

        return response()->json($surahs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surah = new Surah();
        $surah->surah_number = $request->input('surah_number');
        $surah->asma = $request->input('asma');
        $surah->name = $request->input('name');
        $surah->arti = $request->input('arti');
        $surah->jumlah_ayat = $request->input('jumlah_ayat');
        $surah->no_urut_wahyu = $request->input('no_urut_wahyu');
        $surah->tempat_turun = $request->input('tempat_turun');
        $surah->ruku = $request->input('ruku');
        $surah->keterangan = $request->input('keterangan');
        $surah->audio = $request->input('audio');
        $surah->save();

        return response()->json(['message' => 'Surah uploaded successfully', 'surah' => $surah], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $surah = Surah::with('ayats')->find($id);

        return response()->json($surah);
    }

    public function showAyat($id, $ayatId)
    {
        $ayat = Ayat::where('surah_id', $id)->where('ayat_number', $ayatId)->first();

        return response()->json($ayat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $surah = surah::where('text', 'like', '%' . $keyword . '%')->get();

       

        return response()->json($surah);
    }
}
