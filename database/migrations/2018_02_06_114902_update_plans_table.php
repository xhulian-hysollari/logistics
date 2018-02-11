<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->renameColumn('braintree_plan','duration');
            $table->string('slug')->nullable()->change();
            $table->string('cost')->nullable()->change();
            $table->string('freight_listing')->nullable();
            $table->string('truck_listing')->nullable();
            $table->string('tender_listing')->nullable();
            $table->string('ads')->nullable();
            $table->string('free_chat')->nullable();
            $table->string('route_planning')->nullable();
            $table->string('free_assistance')->nullable();
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
