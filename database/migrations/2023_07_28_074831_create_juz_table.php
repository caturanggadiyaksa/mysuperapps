<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juz', function (Blueprint $table) {
            $table->id();
            $table->integer('juz_number');
            $table->json('verse_mapping');
            $table->integer('first_verse_id');
            $table->integer('last_verse_id');
            $table->integer('verses_count');
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
        Schema::dropIfExists('juz');
    }
}
