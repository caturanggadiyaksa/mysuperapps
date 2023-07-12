<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surahs', function (Blueprint $table) {
            $table->id();
            $table->integer('surah_number');
            $table->string('asma');
            $table->string('name');
            $table->string('arti');
            $table->integer('jumlah_ayat');
            $table->string('no_urut_wahyu');
            $table->string('tempat_turun');
            $table->string('ruku');
            $table->longText('keterangan');
            $table->text('audio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surahs');
    }
}
