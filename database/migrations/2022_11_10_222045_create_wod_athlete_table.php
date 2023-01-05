<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wod_athlete', function (Blueprint $table) {
            $table->id()->comment('LLave Primaria Tabla de Wod del Atleta');
            $table->unsignedInteger('athlete_id');
            $table->unsignedInteger('wod_id');
            $table->foreign('athlete_id')->references('id')->on('athletes');
            $table->foreign('wod_id')->references('id')->on('wod');
            $table->integet('points');
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
        Schema::dropIfExists('wod_athlete');
    }
};
