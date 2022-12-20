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
            $table->string('company');
            $table->string('departure_station');
            $table->string('destination_station');
            $table->time('departure_time')->nullable();
            $table->time('destination_time')->nullable();
            $table->smallInteger('train_code')->nullable();
            $table->tinyInteger('number_of_train_carriage')->nullable();
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(1);
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
