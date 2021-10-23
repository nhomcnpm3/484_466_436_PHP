<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_class', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_account');
            $table->unsignedBigInteger('ID_class');
            $table->boolean('status');
            $table->foreign('ID_account')->references('id')->on('account');
            $table->foreign('ID_class')->references('id')->on('class');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_class');
    }
}
