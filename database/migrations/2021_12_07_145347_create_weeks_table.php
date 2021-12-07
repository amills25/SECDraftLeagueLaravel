<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('athlete_id');
            $table->foreign('athlete_id')
                ->references('id')
                ->on('athletes')
                ->cascade('delete');
            $table->unsignedBigInteger('lineup_id');
            $table->foreign('lineup_id')
                ->references('id')
                ->on('lineups')
                ->cascade('delete');
            $table->integer('points');
            $table->integer('week_number');
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
        Schema::dropIfExists('weeks');
    }
}
