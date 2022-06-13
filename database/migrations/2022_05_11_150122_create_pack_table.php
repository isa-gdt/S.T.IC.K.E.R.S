<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack', function (Blueprint $table) {
            $table->id('idPack');
            $table->unsignedBigInteger('idUsu');
            $table->string('name');
            $table->date('creation_date');
            //$table->timestamps();
        });

        // Schema::table('pack', function (Blueprint $table){
        //     $table->foreign('idUsu')->references('idUsu')->on('user')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack');
    }
}
