<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('form_index')->unique();
            $table->string('form_code', 7)->unique();
            $table->string('form_name', 256)->unique();
            $table->char('medstat_code', 5)->unique()->nullable();
            $table->char('short_ms_code', 5)->unique()->nullable();
            $table->integer('relation')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
