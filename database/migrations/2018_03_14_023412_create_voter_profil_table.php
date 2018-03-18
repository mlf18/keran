<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoterProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('voter_profil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voter_id')->unsigned();
            $table->integer('profil_id')->unsigned();
            $table->foreign('voter_id')
              ->references('id')->on('voters')
              ->onDelete('cascade');
            $table->foreign('profil_id')
              ->references('id')->on('profils')
              ->onDelete('cascade');
            $table->string('token',255);
            $table->boolean('status');
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
    }
}
