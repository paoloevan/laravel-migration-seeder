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
            $table->string('departure station');
            $table->string('destination station');
            $table->time('departure time')->nullable();
            $table->time('destination time')->nullable();
            $table->smallInteger('train code')->nullable();
            $table->tinyInteger('number of train carriage')->nullable();
            $table->boolean('on time')->default(1);
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
