<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('city')->nullable();
            $table->string('name')->nullable();
            $table->string('service')->nullable(); // in, out, tour
            $table->string('details')->nullable(); 
            $table->string('typeCar')->nullable(); 
            $table->string('price')->nullable();
            $table->string('contactName')->nullable();
            $table->string('contactEmail')->nullable();
            $table->string('contactPhone')->nullable();
            $table->string('contactBank')->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
