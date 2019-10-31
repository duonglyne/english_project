<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiemtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiemtra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chuDe_id');
            $table->foreign('chuDe_id')->references('id')->on('chude');
            $table->string('name');
            $table->string('title');
            $table->text('description');
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
        Schema::dropIfExists('kiemtra');
    }
}
