<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->id('id_caso');
            $table->string('descripcion_caso');

            $table->unsignedBigInteger('instancia_id');
            $table->unsignedBigInteger('rama_id'); 


            $table->foreign('instancia_id')->references('id_instancia')->on('instancia');
            $table->foreign('rama_id')->references('id_rama')->on('rama_derechos');

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
        Schema::dropIfExists('casos');
    }
};
