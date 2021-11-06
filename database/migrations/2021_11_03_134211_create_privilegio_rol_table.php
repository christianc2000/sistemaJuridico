<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio_rol', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('privilegio_id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('privilegio_id')->references('id')->on('privilegios');
            $table->foreign('rol_id')->references('id')->on('rols');
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
        Schema::dropIfExists('privilegio_rol');
    }
}
