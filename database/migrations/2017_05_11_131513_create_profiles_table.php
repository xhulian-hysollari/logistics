<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('telephone', 20);
            $table->string('mobile', 20);
            $table->string('fax', 20);
            $table->string('skype', 20);
            $table->string('languages', 255);
            $table->string('company', 255);
            $table->string('website', 255);
            $table->text('about_me');
            $table->enum('preferred_lang',['sq','en'])->default('en');
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
        Schema::dropIfExists('profiles');
    }
}
