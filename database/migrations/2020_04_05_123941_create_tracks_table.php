<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('Collection_Id')->unsigned();
            $table->foreign('Collection_Id')->references('id')->on('collections');
            $table->Integer('Singer_Id')->unsigned();
            $table->foreign('Singer_Id')->references('id')->on('singers');
            $table->Integer('Album_Id')->unsigned();
            $table->foreign('Album_Id')->references('id')->on('albums');
            $table->string('Track_Name');
            $table->string('Track_Url');
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
        Schema::dropIfExists('tracks');
    }
}
