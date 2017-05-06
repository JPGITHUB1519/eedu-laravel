<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesVsLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_vs_leaders', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->integer('leader_id')->unsigned();
            $table->foreign('course_id')->references("id")->on("courses");
            $table->foreign("leader_id")->references("id")->on("leaders");
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
        Schema::dropIfExists('courses_vs_leaders');
    }
}
