<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->year('year');
            $table->string('firstPlace');
            $table->string('firstPlacePoints');
            $table->string('secondPlace');
            $table->string('secondPlacePoints');
            $table->string('thirdPlace');
            $table->string('thirdPlacePoints');
            $table->string('fourthPlace');
            $table->string('fourthPlacePoints');
            $table->string('fifthPlace');
            $table->string('fifthPlacePoints');
            $table->string('sixthPlace');
            $table->string('sixthPlacePoints');
            $table->string('seventhPlace');
            $table->string('seventhPlacePoints');
            $table->string('eighthPlace');
            $table->string('eighthPlacePoints');
            $table->string('ninthPlace');
            $table->string('ninthPlacePoints');
            $table->string('tenthPlace');
            $table->string('tenthPlacePoints');
            $table->string('bigFish');
            $table->string('bigFishPoints');
            $table->text('notes');
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
        Schema::dropIfExists('tournament');
    }
}
