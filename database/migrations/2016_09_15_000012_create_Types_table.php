<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Types', function (Blueprint $table) {
            $table->increments('idType')->nullable()->default(NULL);
            $table->string('name', 15);
            $table->string('id', 15);
        });

        Schema::table('Cards', function (Blueprint $table) {
            $table->foreign('idType')->references('idType')->on('Types')->onDelete('')->onUpdate('');
        });

        Schema::table('CardsSubTypes', function (Blueprint $table) {
            $table->foreign('idType')->references('idType')->on('Types')->onDelete('')->onUpdate('');
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
            $table->dropForeign(['idType']);
            $table->dropForeign(['idType']);
        });

        Schema::drop('Types');
    }
}