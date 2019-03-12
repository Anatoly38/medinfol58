<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_rows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('album_id')->index();
            $table->integer('row_id')->index();
            $table->timestamps();
            $table->unique(['album_id', 'row_id' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_rows');
    }
}
