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
<<<<<<< Updated upstream
            $table->bigIncrements('ID');
=======
            $table->id();
>>>>>>> Stashed changes
            $table->string('TenLop');
            $table->string('MoTa');
            $table->string('Logo');
            $table->string('Banner');
            $table->string('MauChuDe');
<<<<<<< Updated upstream
            $table->bigInteger('MaLop');
=======
            $table->string('MaLop');
            $table->unsignedBigInteger('ID_TaiKhoan');
            $table->foreign('ID_TaiKhoan')->references('ID')->on('TaiKhoan');
>>>>>>> Stashed changes
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