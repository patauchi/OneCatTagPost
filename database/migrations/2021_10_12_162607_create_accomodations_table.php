<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string('city')->nullable();
            $table->string('name')->nullable();
            $table->string('category')->nullable(); // 1,2,3,4,5 stars
            $table->string('typeHotel')->nullable();
            $table->string('categoryRoom')->nullable();
            $table->string('typeRoom')->nullable();
            $table->string('price')->nullable();
            $table->string('lunch')->nullable();
            $table->string('contactName')->nullable();
            $table->string('contactEmail')->nullable();
            $table->string('contactPhone')->nullable();
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
        Schema::dropIfExists('accomodations');
    }
}
