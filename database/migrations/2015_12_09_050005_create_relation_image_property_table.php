<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationImagePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_image_property', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_propertys')->unsigned();
            $table->foreign('id_propertys')->references('id')->on('propertys');
            $table->integer('id_images')->unsigned();
            $table->foreign('id_images')->references('id')->on('images');
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
        Schema::drop('relation_image_property');
    }
}
