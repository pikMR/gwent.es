<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rows', function (Blueprint $table) {
            $table->increments('idRow')->nullable()->default(NULL);
            $table->string('name', 6);
            $table->string('id', 6);
        });

        Schema::table('CardsRows', function (Blueprint $table) {
            $table->foreign('idRow')->references('idRow')->on('Rows')->onDelete('')->onUpdate('');
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
            $table->dropForeign(['idRow']);
        });

        Schema::drop('Rows');
    }
}