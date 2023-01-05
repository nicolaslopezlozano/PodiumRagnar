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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id()->comment('LLave Primaria Tabla de Atletas');
            $table->string('name', 255)->nullable()->comment('Nombre del Atleta');
            $table->unsignedInteger('gym_id');
            $table->unsignedInteger('category_id');
            $table->foreign('gym_id')->references('id')->on('gyms');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('athletes');
    }
};
