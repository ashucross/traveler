<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texis', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('drivername');
            $table->string('texinumber')->unique();
            $table->string('drivernumber')->nullable();
            $table->string('rates');
            $table->string('image');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('texis');
    }
}
