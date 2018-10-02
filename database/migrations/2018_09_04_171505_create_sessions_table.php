<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time'); //tiempo de sesion
            $table->integer('incorrectanswer'); //num errores
            $table->integer('correctanswer'); //num aciertos
            $table->integer('rating'); //calificacion

            $table->integer('station_id')->unsigned();
            $table->foreign('station_id')->references('id')->on('stations');
            
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            //numero de sesion ejecutada // array
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
        Schema::dropIfExists('sessions');
    }
}
