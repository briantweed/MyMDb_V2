<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forename');
            $table->string('surname')->nullable()->default(NULL);
            $table->date('birthday')->nullable()->default(NULL);
            $table->date('deceased')->nullable()->default(NULL);
            $table->string('imdb_id')->nullable()->default(NULL);
            $table->string('image')->nullable()->default(NULL);
            $table->text('bio')->nullable()->default(NULL);
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
        Schema::dropIfExists('people');
    }
}
