<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationPropertyFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_property_facility', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_facilities')->unsigned();
            $table->foreign('id_facilities')->references('id')->on('facilities');
            $table->integer('id_propertys')->unsigned();
            $table->foreign('id_propertys')->references('id')->on('propertys');
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
        Schema::drop('relation_property_facility');
    }
}
