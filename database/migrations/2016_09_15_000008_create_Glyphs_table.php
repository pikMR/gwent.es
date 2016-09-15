<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlyphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Glyphs', function (Blueprint $table) {
            $table->increments('idGlyph')->nullable()->default(NULL);
            $table->string('id', 10);
            $table->string('name', 10);
            $table->tinyInteger('isWeatherGlyph')->default(FALSE);
            $table->string('text', 70);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Glyphs');
    }
}