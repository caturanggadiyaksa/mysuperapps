<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuthorizedApps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('authorized_apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_id')->unique();
            $table->string('client_secret');
            $table->string('name');
            $table->string('redirect_uri');
            $table->string('api_key')->unique()->nullable();
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
        //
        Schema::dropIfExists('authorized_apps');
    }
}
