<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_opc')->nullable();
            $table->string('file', 128)->nullable();
            $table->string('descrip_hallazgo')->nullable();
            $table->date('fecha_hallazgo')->nullable();

            $table->integer('edificio_id')->unsigned();
            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('cascade');
            $table->string('lugar_especifico')->nullable();
            $table->string('riesgo')->nullable();
            $table->string('sugerencia_soluc')->nullable();


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
        Schema::dropIfExists('reportes');
        Schema::dropIfExists('edificios');
    }
}
