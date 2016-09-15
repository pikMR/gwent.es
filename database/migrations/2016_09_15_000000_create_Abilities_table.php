<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Abilities', function (Blueprint $table) {
            $table->increments('idAbility')->nullable()->default(NULL);
            $table->string('id', 30);
            $table->string('name', 30);
            $table->string('description', 100)->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Abilities');
    }
}