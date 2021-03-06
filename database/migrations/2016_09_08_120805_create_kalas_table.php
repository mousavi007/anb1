<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('groupkalas_id')->unsigned();
            $table->foreign('groupkalas_id')->references('id')->on('groupkalas');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->timestamps();
            $table->integer('code_amval');
            $table->unique('code_amval');
            $table->date('start_garranty')->nullable();
            $table->date('end_garranty')->nullable();
            $table->string('company');
            $table->string('model');
            Schema::enableForeignKeyConstraints();

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalas');
    }
}