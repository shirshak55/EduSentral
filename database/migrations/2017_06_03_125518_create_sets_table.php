<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedInteger('year');
            $table->unsignedInteger('rule_id')->nullable()->indexed();
            $table->unsignedInteger('board_id')->indexed();

            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
            $table->foreign('rule_id')->references('id')->on('rules')->onDelete('set null');

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
        Schema::dropIfExists('sets');
    }
}
