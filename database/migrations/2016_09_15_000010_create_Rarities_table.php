<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rarities', function (Blueprint $table) {
            $table->increments('idRarity')->nullable()->default(NULL);
            $table->string('name', 10);
            $table->string('id', 10);
        });

        Schema::table('Cards', function (Blueprint $table) {
            $table->foreign('idRarity')->references('idRarity')->on('Rarities')->onDelete('')->onUpdate('');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Cards', function (Blueprint $table) {
            $table->dropForeign(['idRarity']);
        });

        Schema::drop('Rarities');
    }
}