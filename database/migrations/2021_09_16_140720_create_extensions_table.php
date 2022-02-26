<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extensions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('days')->nullable();
            $table->string('price')->nullable();
            $table->string('suplement')->nullable();
            $table->longText('accomodation')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('img_url')->nullable();

            $table->string('status');
            
            $table->unsignedBigInteger('destination_id');           
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');

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
        Schema::dropIfExists('extensions');
    }
}
