<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');

            $table->text('content');
            $table->string('difficulty')->nullable();
            $table->integer('marks');
            $table->integer('time');
            $table->integer('sort');

            $table->string('questionable_type');
            $table->unsignedInteger('questionable_id');

            $table->foreign('questionable_id')->references('id')->on('sets')->onDelete('cascade');

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
        Schema::dropIfExists('questions');
    }
}
