<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gianhaplop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiaNhapLop', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('TrangThaiTruyCap');
            $table->string('Token_mail');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->unsignedBigInteger('ID_Lop');
            $table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            $table->foreign('ID_Lop')->references('ID')->on('Lop');
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
        Schema::dropIfExists('GiaNhapLop');
    }
}
