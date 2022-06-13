<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_etiqueta', function (Blueprint $table) {
            $table->unsignedBigInteger('idEti');
            $table->unsignedBigInteger('idSti');
            // $table->timestamps();
        });

        // Schema::table('pack_etiqueta', function (Blueprint $table){
        //     $table->foreign('idEti')->references('idEti')->on('etiqueta')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('idSti')->references('idSti')->on ('sticker')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack_etiqueta');
    }
}
