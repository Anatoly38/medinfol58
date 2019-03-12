<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_columns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('album_id')->index();
            $table->integer('column_id')->index();
            $table->timestamps();
            $table->unique(['album_id', 'column_id' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_columns');
    }
}
