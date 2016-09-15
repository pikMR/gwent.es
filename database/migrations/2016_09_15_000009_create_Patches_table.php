<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patches', function (Blueprint $table) {
            $table->increments('idPatch')->nullable()->default(NULL);
            $table->string('version', 10);
            $table->timestamp('releaseDate');
            $table->string('changelog', 500)->nullable()->default(NULL);
            $table->string('id', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Patches');
    }
}