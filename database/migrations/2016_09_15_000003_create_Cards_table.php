<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cards', function (Blueprint $table) {
            $table->increments('idCard')->nullable()->default(NULL);
            $table->integer('idRarity');
            $table->integer('idFaction');
            $table->integer('idType');
            $table->integer('idAbility')->nullable()->default(NULL);
            $table->string('id', 50);
            $table->string('name', 50);
            $table->integer('strength')->nullable()->default(NULL);
            $table->string('text', 255)->nullable()->default(NULL);
            $table->string('flavor', 255)->nullable()->default(NULL);

            $table->foreign('idAbility')->references('idAbility')->on('Abilities')->onDelete('')->onUpdate('');
        });

        Schema::table('Artworks', function (Blueprint $table) {
            $table->foreign('idCard')->references('idCard')->on('Cards')->onDelete('')->onUpdate('');
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
            $table->dropForeign(['idAbility']);
        });

        Schema::table('Artworks', function (Blueprint $table) {
            $table->dropForeign(['idCard']);
        });

        Schema::drop('Cards');
    }
}
