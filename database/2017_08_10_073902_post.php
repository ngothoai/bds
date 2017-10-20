<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('slug');
            $table->string('description',300);
            $table->integer('price',10);
            $table->integer('idCat')->unsigned();
            $table->string('image');
            $table->timestamps();
           
            $table->foreign('idCat')->references('id')->on('category_product')->onDelete('cascade');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('posts');
    }
}
