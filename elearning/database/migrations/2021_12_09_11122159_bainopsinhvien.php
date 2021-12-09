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
            $table->bigIncrements('ID');
            $table->bigInteger('ID_TaiKhoan');
            $table->bigInteger('ID_BaiDang');
            $table->bigInteger('ID_TepBaiNop');
            //$table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            //$table->foreign('ID_BaiDang')->references('ID')->on('BaiDang');
            //$table->foreign('ID_TepBaiNop')->references('ID')->on('TepBaiNop');
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
