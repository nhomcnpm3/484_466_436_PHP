<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BaiDang', function (Blueprint $table) {
            $table->id();
            $table->string('TieuDe');
            $table->string('ChiTiet');
            $table->dateTime('HanNop');
            $table->integer('TrangThai');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->unsignedBigInteger('ID_Lop');
            $table->unsignedBigInteger('ID_TepBaiDang');
            $table->unsignedBigInteger('ID_ChiTietBaiDang');
            $table->foreign('ID_TaiKhoan')->references('id')->on('TaiKhoan');
            $table->foreign('ID_Lop')->references('id')->on('Lop');
            $table->foreign('ID_TepBaiDang')->references('id')->on('TepBaiDang');
            $table->foreign('ID_ChiTietBaiDang')->references('id')->on('ChiTietBaiDang');
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
        Schema::dropIfExists('BaiDang');
    }
}
