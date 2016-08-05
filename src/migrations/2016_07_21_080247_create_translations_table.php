<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('translations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('table');
            $table->integer('foreign_id');
            $table->string('lang');
            $table->string('field');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('translations');
    }

}
