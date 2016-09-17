<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CardsRows', function (Blueprint $table) {
            $table->increments('idCardRow')->nullable()->default(NULL);
            $table->integer('idCard');
            $table->integer('idRow');

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
        Schema::table('CardsRows', function (Blueprint $table) {
            $table->dropForeign(['idCard']);
        });

        Schema::drop('CardsRows');
    }
}