<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sheetone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sheetone', function (Blueprint $table) {
            $table->id();
            $table->string('segment');
            $table->string('country');
            $table->string('product');
            $table->string('discountBand');
            $table->string('unitSolid');
            $table->string('ManuFactoring');
            $table->string('sale_price');
            $table->string('gross_sales');
            $table->string('discounts');
            $table->string('sales');
            $table->string('cogs');
            $table->string('profit');
            $table->integer('date');
            $table->integer('month_number');
            $table->string('month_name'); 
            $table->string('year');
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
