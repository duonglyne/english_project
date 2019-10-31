<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTumoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumoi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chuDe_id');
            $table->foreign('chuDe_id')->references('id')->on('chude');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('kiemtra');
            $table->string('name');
            $table->string('image');
            $table->string('sound');
            $table->string('phien_am');
            $table->text('description');
            $table->text('giai_thich');
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
        Schema::dropIfExists('tumoi');
    }
}
