<?php

use App\Models\DocumentoJudicial;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoJudicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_judicials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('status',[DocumentoJudicial::BORRADOR, DocumentoJudicial::PUBLICADO])->default(DocumentoJudicial::BORRADOR);//HACER REFERENCIA AL MODELO//2 si está publicado y 1 si está en borrador
            $table->unsignedBigInteger('procurador_id');
            $table->unsignedBigInteger('expediente_id');
            $table->unsignedBigInteger('proceso_judicial_id');
            $table->foreign('procurador_id')->references('id')->on('procuradors');
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            $table->foreign('proceso_judicial_id')->references('id')->on('proceso_judicials');
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
        Schema::dropIfExists('documento_judicials');
    }
}
