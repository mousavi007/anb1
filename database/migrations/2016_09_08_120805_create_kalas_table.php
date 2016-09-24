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
            $table->integer('group_id')->unsigned();
         //   $table->foreign('group_id')->references('id')->on('groupkalas');
            $table->timestamps();
            $table->integer('code_amval');
            $table->unique('code_amval');
            $table->date('start_garranty');
            $table->date('end_garranty');
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
