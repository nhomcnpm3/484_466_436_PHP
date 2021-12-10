<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Taikhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TaiKhoan', function (Blueprint $table) {
            $table->id();
            $table->string('Ten');
            $table->string('AVT');
            $table->string('Email');
            $table->string('DiaChi');
            $table->string('password');
            $table->date('NgaySinh');
            $table->integer('TrangThai');
            $table->unsignedBigInteger('ID_LoaiTaiKhoan');
            $table->foreign('ID_LoaiTaiKhoan')->references('id')->on('Loaitaikhoan');
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
        Schema::dropIfExists('TaiKhoan');
    }
}
