<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatisticaFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatistica_filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('filmes_id')->unsigned();
            $table->integer('usuarios_id')->unsigned();
            $table->string('totalFilmes');
            $table->foreign('filmes_id')->references('id')->on('filmes')->onUpdated('cascade')->onDelete('cascade');
            $table->foreign('usuarios_id')->references('id')->on('usuarios')->onUpdated('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('estatistica_filmes');
    }
}
