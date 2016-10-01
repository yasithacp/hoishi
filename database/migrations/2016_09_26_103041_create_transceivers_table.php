<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transceivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product Type');
            $table->string('Compatible Brand');
            $table->string('Level 2 Form Factor');
            $table->string('Level 3 Type of Standard');
            $table->string('L5');
            $table->string('L6');
            $table->string('L7');
            $table->string('Model');
            $table->string('Specification');
            $table->string('Form Factor');
            $table->string('Interface');
            $table->string('Interface Details');
            $table->string('Speed');
            $table->string('Wavelength');
            $table->string('Reach');
            $table->string('Temperature');
            $table->string('DOM / DDM Monitoring');
            $table->string('Connection');
            $table->string('Interchangeable');
            $table->string('Size');
            $table->string('Data Sheet');
            $table->string('Compatibility');
            $table->index('Level 2 Form Factor', 'form_factor_index');
            $table->index('Level 3 Type of Standard', 'standard_index');
            $table->index('Model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transceivers');
    }
}
