<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');

            $table->string('subtitle')->nullable();

            $table->longText('primgraph')->nullable();  
            $table->longText('body')->nullable();  

            $table->longText('seotitle')->nullable();      
            $table->longText('seodescription')->nullable(); 
            $table->longText('img_url')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('nation_id');           
            $table->foreign('nation_id')->references('id')->on('nations')->onDelete('cascade');
           
           $table->unsignedBigInteger('destination_id');           
           $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');

           $table->enum('status', [1,2])->default(1);

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
        Schema::dropIfExists('hotels');
    }
}
