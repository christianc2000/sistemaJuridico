<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
USE App\Models\Actividad;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //$table->timestamp('send'); se registra la fecha de creacion, pero ya se la tiene asi que no es necesario
            $table->boolean('received');
            $table->timestamp('finalized');
            $table->boolean('compliment');
            $table->enum('status',[Actividad::BORRADOR, Actividad::PUBLICADO])->default(Actividad::BORRADOR);//HACER REFERENCIA AL MODELO//2 si está publicado y 1 si está en borrador
            $table->unsignedBigInteger('procurador_id');
            $table->unsignedBigInteger('abogado_id');
            $table->foreign('procurador_id')->references('id')->on('procuradors');
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
        Schema::dropIfExists('actividads');
    }
}
