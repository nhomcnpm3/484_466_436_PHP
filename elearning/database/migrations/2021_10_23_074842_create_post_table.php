<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->dateTime('DateSubmitted');
            $table->boolean('status');
            $table->unsignedBigInteger('ID_class');
            $table->unsignedBigInteger('ID_account');
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
        Schema::dropIfExists('post');
    }
}
