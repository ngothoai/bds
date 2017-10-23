<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Server_detail')->unsigned();
            $table->integer('number_id_Server_detail');
            $table->integer('id_Property_detail')->unsigned();
            $table->timestamps();
            $table->foreign('id_Server_detail')->references('id')->on('service_detail')->onDelete('cascade');
            $table->foreign('id_Property_detail')->references('id')->on('property_detail')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
}
