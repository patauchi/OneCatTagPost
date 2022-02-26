<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug'); 

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('primgraph')->nullable();
            $table->longText('quotation')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('sidetitle')->nullable();
            $table->longText('sidebody')->nullable();
            $table->string('journalsubtitle')->nullable();
            $table->longText('body')->nullable();            
   
            $table->longText('seotitle')->nullable();      
            $table->longText('seodescription')->nullable(); 
            $table->longText('img_url')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', [1,2])->default(1);
            $table->unsignedBigInteger('nation_id')->nullable();
            $table->foreign('nation_id')->references('id')->on('nations')->onDelete('cascade');

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
        Schema::dropIfExists('destinations');
    }
}
