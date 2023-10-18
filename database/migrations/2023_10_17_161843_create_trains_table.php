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
            $table->string('leaving_time', 15);
            $table->string('arrives_time', 15);
            $table->string('id_train', 15);
            $table->string('coach', 15);
            $table->string('time', 15);
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
