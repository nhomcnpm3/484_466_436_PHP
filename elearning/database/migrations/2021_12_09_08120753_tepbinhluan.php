<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tepbinhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TepBinhLuan', function (Blueprint $table) {
            $table->id();
            $table->string('Url');
            $table->unsignedBigInteger('ID_BaiDang');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->unsignedBigInteger('ID_Lop');
            $table->foreign('ID_BaiDang')->references('id')->on('BaiDang');
            $table->foreign('ID_TaiKhoan')->references('id')->on('TaiKhoan');
            $table->foreign('ID_Lop')->references('id')->on('Lop');
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
        Schema::dropIfExists('TepBinhLuan');
    }
}
