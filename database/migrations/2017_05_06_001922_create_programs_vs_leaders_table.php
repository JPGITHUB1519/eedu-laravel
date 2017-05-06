<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsVsLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs_vs_leaders', function (Blueprint $table) {
            $table->integer('program_id')->unsigned();
            $table->integer('leader_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('leader_id')->references('id')->on('leaders');
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
        Schema::dropIfExists('programs_vs_leaders');
    }
}
