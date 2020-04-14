<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Singer_Name');
            $table->string('Album_Image');
            $table->string('Album_Name');
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
        Schema::dropIfExists('single_collections');
    }
}
