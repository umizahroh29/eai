<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestBahanBakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_bahan_baku', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('id_vendor');
            $table->unsignedInteger('id_karyawan');
            $table->unsignedInteger('id_bahan_baku');
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
        Schema::dropIfExists('request_bahan_baku');
    }
}
