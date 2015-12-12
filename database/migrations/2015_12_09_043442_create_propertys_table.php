<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('alamat');
            $table->decimal('pos');
            $table->string('luas');
            $table->integer('jumlahkamartersedia');
            $table->integer('jumlahkamar');
            $table->integer('biayaharian')->nullable();
            $table->integer('biayabulanan')->nullable();
            $table->integer('biayatahunan')->nullable();
            $table->integer('id_occupant')->unsigned();
            $table->foreign('id_occupant')->references('id')->on('occupants');
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
        Schema::drop('propertys');
    }
}
