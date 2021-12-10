<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitietlop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietLop', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('ID_TaiKhoan');
            $table->bigInteger('ID_Lop');
            $table->integer('TrangThai');
            //$table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
            //$table->foreign('ID_Lop')->references('ID')->on('Lop');
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
        Schema::dropIfExists('ChiTietLop');
    }
}