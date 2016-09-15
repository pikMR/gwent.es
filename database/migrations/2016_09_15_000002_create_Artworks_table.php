<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Artworks', function (Blueprint $table) {
            $table->increments('idArtwork')->nullable()->default(NULL);
            $table->integer('idCard');
            $table->integer('idCategory');
            $table->integer('idArtist')->nullable()->default(NULL);
            $table->tinyInteger('isAlternative')->default(FALSE);
            $table->string('filename', 255);

            $table->foreign('idArtist')->references('idArtist')->on('Artists')->onDelete('')->onUpdate('');
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
            $table->dropForeign(['idArtist']);
        });

        Schema::drop('Artworks');
    }
}