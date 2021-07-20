<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetSerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_seris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assets_id'); 
            $table->string('nomor_seri');
            $table->string('nomor_pembelian')->nullable();
            $table->unsignedBigInteger('sub_lokasi_duas_id');
            $table->unsignedBigInteger('sumber_danas_id');
            $table->unsignedBigInteger('departements_id');
            $table->string('merk_judul');
            $table->integer('harga_beli')->nullable();
            $table->integer('harga_sekarang')->nullable();
            $table->integer('harga_minimum')->nullable();
            $table->integer('nilai_penyusutan')->nullable();
            $table->string('kondisi'); //rusak/baik/setengahbaik
            $table->date('tanggal_beli')->nullable();
            $table->string('sn')->unique()->nullable();

            $table->foreign('assets_id')->references('id')->on('assets');
            $table->foreign('sub_lokasi_duas_id')->references('id')->on('sub_lokasi_duas');
            $table->foreign('sumber_danas_id')->references('id')->on('sumber_danas');
            $table->foreign('departements_id')->references('id')->on('departements');

            $table->softDeletes();
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
        Schema::dropIfExists('asset_seris');
    }
}
