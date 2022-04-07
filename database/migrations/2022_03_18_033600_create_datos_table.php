<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('secondname');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->unsignedBigInteger('cedula');
            $table->unsignedBigInteger('historia')->unique();
            $table->string('nacionalidad');
            $table->string('municipio');
            $table->date('fecha_nac');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('parroquia');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('telf_hab');
            $table->string('telf_cel');
            $table->string('email');
            $table->string('nivel_ins');
            $table->string('prof_of');
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
        Schema::dropIfExists('datos');
    }
}
