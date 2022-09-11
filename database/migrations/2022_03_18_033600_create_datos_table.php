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
            $table->date('fechaNac');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('genero');
            $table->string('direccion');
            $table->string('telfHab');
            $table->string('telfCel');
            $table->string('email');
            $table->string('nivelIns');
            $table->string('profOf');
            $table->date('fechaIng');
            $table->string('anioDiag');
            $table->string('estatusAdm');
            $table->string('servCargo');
            $table->string('elisa1');
            $table->string('elisa2');
            $table->string('wb');
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
