<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('slug');                 

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('primgraph')->nullable();
            $table->string('quotation')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('sidetitle')->nullable();
            $table->longText('sidebody')->nullable();
            $table->string('journalsubtitle')->nullable();
            $table->longText('body')->nullable();            

            $table->longText('seotitle')->nullable();      
            $table->longText('seodescription')->nullable(); 
            $table->string('img_url')->nullable();                        
            
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
        Schema::dropIfExists('nations');
    }
}
