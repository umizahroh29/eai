<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_vendor')->references('id')->on('vendor');
            $table->unsignedInteger('id_karyawan');
            $table->unsignedInteger('id_barang')->references('id')->on('barang');
            $table->integer('kuantitas');
            $table->decimal('harga');
            $table->boolean('disetujui')->default(false);
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
        Schema::dropIfExists('request_barang');
    }
}
