<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropertyDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Property')->unsigned();
            $table->integer('price');
            $table->integer('areaProperty');
            $table->integer('priceSale');
            $table->string('description_short');
            $table->string('tiennghi');
            $table->string('address');
            $table->string('soPhongTam');
            $table->string('soPhongNgu');
            $table->string('baiDoxe');
            $table->string('latMap');
            $table->string('longMap');
            $table->string('startDate');
            $table->string('endDate');
            $table->timestamps();
            $table->foreign('id_Property')->references('id')->on('property')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_detail');
    }
}
