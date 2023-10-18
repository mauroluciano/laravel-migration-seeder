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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('departing_from', 50);
            $table->string('going_to', 50);
            $table->time('leaving_time');
            $table->time('arrives_time');
            $table->tinyInteger('id_train')->unsigned();
            $table->tinyInteger('coach')->unsigned();
            $table->boolean('time');
            $table->boolean('deleted');       
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
        Schema::dropIfExists('trains');
    }
};
