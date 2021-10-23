<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExeciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('execise', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("content");
            $table->dateTime("date_submited");
            $table->dateTime("deadline");
            $table->bigInt("ID_post");
            $table->foreign('ID_post')->references('id')->on('post');
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
        
    }
}
