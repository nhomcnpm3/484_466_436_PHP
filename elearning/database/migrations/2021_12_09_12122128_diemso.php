<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diemso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DiemSo', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('Diem');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->unsignedBigInteger('ID_BaiDang');
            $table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            $table->foreign('ID_BaiDang')->references('ID')->on('BaiDang');
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
        Schema::dropIfExists('DiemSo');
    }
}
