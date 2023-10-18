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
            $table->Time('leaving_time', 5);
            $table->Time('arrives_time', 5);
            $table->tinyInteger('id_train')->unsigned();
            $table->tinyInteger('coach')->unsigned();
            $table->Time('time', 5);
            $table->string('deleted', 15);       
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
