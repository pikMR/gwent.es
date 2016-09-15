<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categories', function (Blueprint $table) {
            $table->increments('idCategory')->nullable()->default(NULL);
            $table->string('name', 20);
        });

        Schema::table('Artworks', function (Blueprint $table) {
            $table->foreign('idCategory')->references('idCategory')->on('Categories')->onDelete('')->onUpdate('');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Artworks', function (Blueprint $table) {
            $table->dropForeign(['idCategory']);
        });

        Schema::drop('Categories');
    }
}