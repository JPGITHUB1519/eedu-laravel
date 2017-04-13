<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsVsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs_vs_courses', function (Blueprint $table) {
            $table->integer("program_id")->unsigned();
            $table->integer("course_id")->unsigned();
            $table->foreign("program_id")->references("id")->on('programs');
            $table->foreign("course_id")->references("id")->on('courses');
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
        Schema::dropIfExists('programs_vs_courses');
    }
}
