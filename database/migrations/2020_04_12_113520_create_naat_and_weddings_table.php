<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaatAndWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naat_and_weddings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Singer_Name');
            $table->string('Album_Name');
            $table->string('Album_Image');
            $table->string('Total_Track');
            $table->string('Release_Date');
            $table->string('Category');
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
        Schema::dropIfExists('naat_and_weddings');
    }
}
