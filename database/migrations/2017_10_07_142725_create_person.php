<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->string('email',250)->unique();
            $table->string('phoneno',250);
            $table->string('gender',250);
            $table->date('dob');
            $table->string('bio',500);
            $table->string('image',650);
            
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
        Schema::dropIfExists('person');
    }
}
