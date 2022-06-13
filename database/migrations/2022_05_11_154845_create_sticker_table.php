<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticker', function (Blueprint $table) {
            $table->id('idSti');
            $table->unsignedBigInteger('idPack');
            $table->string('img');
           // $table->timestamps();
        });

        // Schema::table('sticker', function(Blueprint $table){
        //     $table->foreign('idPack')->references('idPack')->on('Pack')->onUpadte('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sticker');
    }
}
