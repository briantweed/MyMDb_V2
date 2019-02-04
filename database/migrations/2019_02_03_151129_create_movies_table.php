<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('sort_name')->nullable();
            $table->string('imdb_id')->nullable()->default(NULL);
            $table->integer('released');
            $table->integer('rating');
            $table->integer('running_time');
            $table->string('image');
            $table->integer('certificate_id')->unsigned();
            $table->integer('format_id')->unsigned();
            $table->integer('studio_id')->unsigned();
            $table->boolean('duplicate');
            $table->text('bio');
            $table->timestamp('purchased')->default(now());
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
        Schema::dropIfExists('movies');
    }
}
