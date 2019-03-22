<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('form_id')->index();
            $table->integer('table_index')->index();
            $table->string('table_code', 6)->nullable()->index();
            $table->string('table_name', 256)->index();
            $table->char('medstat_code', 4)->nullable()->index();
            $table->boolean('transposed')->default(false);
            $table->integer('medstatnsk_id')->index()->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['form_id', 'table_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
