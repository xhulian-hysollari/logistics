<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('content');
            $table->unique(['legal_id', 'locale']);
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
        Schema::dropIfExists('legal_translations');
    }
}
