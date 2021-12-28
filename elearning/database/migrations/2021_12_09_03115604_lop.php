<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lop', function (Blueprint $table) {
            $table->id();
            $table->string('TenLop');
            $table->string('MoTa');
            $table->string('Logo');
            $table->string('Banner');
            $table->string('MauChuDe');
            $table->string('MaLop');
            $table->string('token');
            $table->integer('trangthai');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
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
        Schema::dropIfExists('Lop');
    }
}