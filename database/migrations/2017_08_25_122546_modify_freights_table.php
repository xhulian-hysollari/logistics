<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFreightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freights', function (Blueprint $table) {
            $table->string('unloading')->nullable();
            $table->string('width')->nullable();
            $table->string('loading_lng')->nullable();
            $table->string('loading_lat')->nullable();
            $table->string('unloading_lng')->nullable();
            $table->string('unloading_lat')->nullable();
            $table->renameColumn('location', 'loading');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
