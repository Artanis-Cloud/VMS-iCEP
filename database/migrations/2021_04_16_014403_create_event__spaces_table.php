<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('venue')->nullable();
            $table->string('level')->nullable();
            $table->string('size')->nullable();
            $table->string('capacity')->nullable();
            $table->string('banquet')->nullable();
            $table->string('classroom')->nullable();
            $table->string('theater')->nullable();
            $table->string('cocktail')->nullable();
            $table->string('cabaret')->nullable();
            $table->string('booth_capacity')->nullable();
            $table->string('daily_rate')->nullable();
            $table->string('meeting_package')->nullable();
            $table->string('image')->nullable();
            $table->string('hotel_id')->nullable();
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
        Schema::dropIfExists('event_spaces');
    }
}
