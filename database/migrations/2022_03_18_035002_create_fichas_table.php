<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fec_ing');
            $table->string('anio_diag');
            $table->string('estatus_adm');
            $table->string('serv_cargo');
            $table->string('elisa1');
            $table->string('elisa2');
            $table->string('wb');
            $table->unsignedBigInteger('paciente_id')->unique();
            $table->foreign('paciente_id')->references('id')->on('datos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
