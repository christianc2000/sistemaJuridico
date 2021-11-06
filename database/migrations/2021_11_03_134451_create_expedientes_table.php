<?php

use App\Models\Expediente;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('ci',10);
            $table->enum('status',[Expediente::BORRADOR, Expediente::PUBLICADO])->default(Expediente::BORRADOR);//HACER REFERENCIA AL MODELO//2 si está publicado y 1 si está en borrador
            $table->unsignedBigInteger('abogado_id');
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
        Schema::dropIfExists('expedientes');
    }
}
