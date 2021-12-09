<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Binhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BinhLuan', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NoiDung');
            $table->integer('TrangThai');
            $table->bigInteger('ID_TepBinhLuan');
            $table->bigInteger('ID_TaiKhoan');
            $table->bigInteger('ID_BaiDang');
            //$table->foreign('ID_TepBinhLuan')->references('ID')->on('TepBinhLuan');
            //$table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            //$table->foreign('ID_BaiDang')->references('ID')->on('BaiDang');
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
        Schema::dropIfExists('BinhLuan');
    }
}
