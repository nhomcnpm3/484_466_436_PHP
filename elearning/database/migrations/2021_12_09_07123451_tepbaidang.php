<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tepbaidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TepBaiDang', function (Blueprint $table) {
            $table->id();
            $table->string('Url');
            $table->unsignedBigInteger('ID_BaiDang');
            $table->foreign('ID_BaiDang')->references('id')->on('BaiDang');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TepBaiDang');
    }
}
