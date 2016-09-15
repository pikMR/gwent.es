<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardssubtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CardsSubTypes', function (Blueprint $table) {
            $table->increments('idCardSubType')->nullable()->default(NULL);
            $table->integer('idCard');
            $table->integer('idType');

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
        Schema::table('CardsSubTypes', function (Blueprint $table) {
            $table->dropForeign(['idCard']);
        });

        Schema::drop('CardsSubTypes');
    }
}