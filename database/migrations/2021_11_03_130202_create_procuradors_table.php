<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcuradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procuradors', function (Blueprint $table) {
            $table->id();
            $table->text('career');
            $table->string('placeEstudy');
            $table->string('authority');
            $table->unsignedBigInteger('abogado_id');
            //$table->unsignedBigInteger('persona_id');
            $table->foreign('id')->references('id')->on('personas');
            $table->foreign('abogado_id')->references('id')->on('abogados');
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
        Schema::dropIfExists('procuradors');
    }
}
