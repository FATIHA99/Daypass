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
    {
        Schema::create('daypasses', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('slug');
            $table->string('lieux');
            $table->string('service1_price')->default(null);
            $table->string('service2_price')->default(null);
            $table->string('service3_price')->default(null);
            $table->string('service4_price')->default(null);
            $table->string('description');
            $table->string('image');
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
        Schema::dropIfExists('daypasses');
    }
};
