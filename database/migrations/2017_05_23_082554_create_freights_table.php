<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('weight', 50);
            $table->string('freight_id', 50);
            $table->string('length', 50);
            $table->string('height', 50);
            $table->string('volume', 50);
            $table->string('type', 50);
            $table->string('location', 255);
            $table->integer('quantity');
            $table->integer('status')->unsigned();
            $table->string('description', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freights');
    }
}
