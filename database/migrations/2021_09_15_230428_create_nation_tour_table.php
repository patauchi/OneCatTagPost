<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nation_tour', function (Blueprint $table) {
            $table->id();
            // Nation
            $table->unsignedBigInteger('nation_id');
            $table->unsignedBigInteger('tour_id');

            $table->foreign('nation_id')->references('id')->on('nations')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');

            // Destination


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
        Schema::dropIfExists('nation_tour');
    }
}
