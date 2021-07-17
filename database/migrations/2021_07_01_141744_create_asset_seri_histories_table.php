<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetSeriHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_seri_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_seris_id');
            $table->unsignedBigInteger('users_id');
            $table->string('method');

            $table->foreign('asset_seris_id')->references('id')->on('asset_seris');
            $table->foreign('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('asset_seri_histories');
    }
}
