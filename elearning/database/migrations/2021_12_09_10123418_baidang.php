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
            $table->bigIncrements('ID');
            $table->string('TieuDe');
            $table->string('ChiTiet');
            $table->dateTime('HanNop');
            $table->integer('TrangThai');
            $table->bigInteger('ID_TaiKhoan');
            $table->bigInteger('ID_Lop');
            $table->bigInteger('ID_TepBaiDang');
            $table->bigInteger('ID_ChiTietBaiDang');
            //$table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            //$table->foreign('ID_Lop')->references('ID')->on('Lop');
            //$table->foreign('ID_TepBaiDang')->references('ID')->on('TepBaiDang');
            //$table->foreign('ID_ChiTietBaiDang')->references('ID')->on('ChiTietBaiDang');
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
