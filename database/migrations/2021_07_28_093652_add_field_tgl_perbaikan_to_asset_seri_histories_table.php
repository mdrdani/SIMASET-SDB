<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldTglPerbaikanToAssetSeriHistoriesTable extends Migration
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
            $table->date('tgl_perbaikan')->nullable();
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
            $table->dropColumn('tgl_perbaikan');
        });
    }
}
