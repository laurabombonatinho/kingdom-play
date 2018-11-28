<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatisticaEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatistica_episodios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('episodios_id')->unsigned();
            $table->integer('usuarios_id')->unsigned();

            $table->integer('totalSeries');
            $table->integer('totalEp');
            $table->integer('totalTemp');
            $table->integer('totalAtivas');
            $table->integer('totalAbandonadas')->default(0);
            $table->integer('totalTerminadas');
            
            $table->foreign('episodios_id')->references('id')->on('episodios')->onUpdated('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('estatistica_episodios');
    }
}
