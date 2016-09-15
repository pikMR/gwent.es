<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factions', function (Blueprint $table) {
            $table->increments('idFaction')->nullable()->default(NULL);
            $table->string('name', 20);
            $table->string('id', 20);
        });

        Schema::table('Cards', function (Blueprint $table) {
            $table->foreign('idFaction')->references('idFaction')->on('Factions')->onDelete('')->onUpdate('');
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
            $table->dropForeign(['idFaction']);
        });

        Schema::drop('Factions');
    }
}