<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('cin');
        $table->string('email');
        $table->date('date_entrer');
        $table->date('date_sortie');
        $table ->integer('nombre_personne');
        $table->integer('is_valid');
          $table->string('services');
        $table->unsignedBigInteger('id_user'); 
        $table->unsignedBigInteger('id_daypass');  
      
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
        Schema::dropIfExists('reservations');
    }
};
