<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToSubLokasiDuas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_seri_histories', function (Blueprint $table) {
            //
            $table->foreign('sub_lokasi_duas_id')->references('id')->on('sub_lokasi_duas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asset_seri_histories', function (Blueprint $table) {
            //
            $table->dropForeign('sub_lokasi_duas_id');
        });
    }
}
