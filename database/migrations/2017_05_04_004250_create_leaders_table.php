<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->date('birthdate');
            $table->string('sex', 1);
            $table->string('profession', 50);
            $table->string('position', 50);
            $table->string('nationality', 50);
            $table->string('email', 50);
            $table->text('description');
            $table->float('rating');
            $table->boolean('is_active');
            $table->text('image_url');
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
        Schema::dropIfExists('leaders');
    }
}
