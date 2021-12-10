<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bainopsinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BaiNopSinhVien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->unsignedBigInteger('ID_BaiDang');
            $table->unsignedBigInteger('ID_TepBaiNop');
            $table->foreign('ID_TaiKhoan')->references('id')->on('TaiKhoan');
            $table->foreign('ID_BaiDang')->references('id')->on('BaiDang');
            $table->foreign('ID_TepBaiNop')->references('id')->on('TepBaiNop');
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
        Schema::dropIfExists('BaiNopSinhVien');
    }
}
