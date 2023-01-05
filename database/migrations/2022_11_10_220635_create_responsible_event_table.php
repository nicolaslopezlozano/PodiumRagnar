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
        Schema::create('responsible_event', function (Blueprint $table) {
            $table->id()->comment('LLave Primaria Tabla de Responsables de Evento');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('responsible_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('responsible_id')->references('id')->on('users');
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
        Schema::dropIfExists('responsible_event');
    }
};
