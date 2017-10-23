<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class District extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('district', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nameProvince');
        $table->integer('idProvince')->unsigned();
        $table->foreign('idProvince')->references('id')->on('province')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district');
        $table->timestamps();
    }
}
