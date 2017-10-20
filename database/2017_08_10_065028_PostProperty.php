<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('singleproperty', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->longText('description');
            $table->Text('city');
            $table->Text('district');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('area');
            $table->integer('idproperty')->unsigned();
            $table->integer('iduser')->unsigned();
            $table->timestamps();
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('idproperty')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singleproperty');
    }
}
