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
        Schema::create('uci', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->foreign('content_id')->references('id')->on('content');
            $table->boolean('watched')->default(false);
            $table->integer('rating')->nullable();
            $table->text('review')->nullable();
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
        Schema::dropIfExists('uci');
    }
};
