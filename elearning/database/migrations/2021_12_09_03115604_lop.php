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
            $table->bigIncrements('ID');
            $table->string('TenLop');
            $table->string('Logo');
            $table->string('Banner');
            $table->string('MauChuDe');
            $table->bigInteger('MaLop');
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
