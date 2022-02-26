<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('slogan');

            $table->string('subtitle')->nullable();
            $table->string('days')->nullable();
            $table->string('shortprice')->nullable();
            $table->string('fullprice')->nullable();
            $table->string('calltoaction')->nullable();
            $table->longText('abstract')->nullable();
            $table->longText('include')->nullable();
            $table->longText('overview')->nullable();

            $table->longText('seotitle')->nullable();      
            $table->longText('seodescription')->nullable(); 
            $table->longText('img_url')->nullable();

            $table->enum('status', [1,2])->default(1);
       //     $table->string('overview');
     //       $table->string('pricing');
   //         $table->string('map');


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

         //   $table->unsignedBigInteger('nation_id');
           // $table->unsignedBigInteger('destination_id');

          //  $table->foreign('nation_id')->references('id')->on('nations')->onDelete('cascade');
            // $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');


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
        Schema::dropIfExists('tours');
    }
}
