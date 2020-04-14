<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('Collection_Id')->unsigned();
            $table->foreign('Collection_Id')->references('id')->on('collections');
            $table->Integer('Singer_Id')->unsigned();
            $table->foreign('Singer_Id')->references('id')->on('singers');
            $table->string('Album_Name');
            $table->string('Album_Image');
            $table->string('Release_Date');
            $table->string('Total_Track');
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
        Schema::dropIfExists('albums');
    }
}
