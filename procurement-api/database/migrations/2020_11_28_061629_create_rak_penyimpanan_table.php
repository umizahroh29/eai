<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakPenyimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rak_penyimpanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_warehouse')->references('id')->on('warehouse');
            $table->string('tipe_rak');
            $table->bigInteger('jumlah_barang');
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
        Schema::dropIfExists('rak_penyimpanan');
    }
}
