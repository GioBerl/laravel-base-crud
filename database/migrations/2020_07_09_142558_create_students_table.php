<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);	
            $table->string('lastname', 100);	
            $table->char('sex', 1);
            $table->integer('sr_num')->unique();    //?crea un indice, va bene? 
            //!Risp: meglio usare anche la validazione per controllo
            $table->string('email')->unique();      //?crea un indice, va bene?
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
        Schema::dropIfExists('students');
    }
}