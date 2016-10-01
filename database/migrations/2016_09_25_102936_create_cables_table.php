<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product Type');
            $table->string('Compatible Brands');
            $table->string('Level 2 Cable Type');
            $table->string('Form');
            $table->string('L5')->nullable();
            $table->string('L6')->nullable();
            $table->string('L7')->nullable();
            $table->string('Model');
            $table->string('Specification');
            $table->index(['Form', 'Model']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cables');
    }
}
