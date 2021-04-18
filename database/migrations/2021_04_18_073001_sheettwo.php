<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sheettwo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Sheettwo', function (Blueprint $table) {

        $table->id();
        $table->integer('product_num');
        $table->string('product');
        $table->integer('choice');
        $table->float('price');
        $table->integer('feature');
        $table->integer('display');
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
        //
    }
}
