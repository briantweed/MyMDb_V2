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
            $table->integer('released')->nullable()->default(NULL);
            $table->integer('rating')->nullable()->default(NULL);
            $table->integer('running_time')->nullable()->default(NULL);
            $table->string('image')->nullable()->default(NULL);
            $table->integer('certificate_id')->unsigned();
            $table->integer('format_id')->unsigned();
            $table->integer('studio_id')->unsigned();
            $table->boolean('duplicate')->default(0);
            $table->text('bio')->nullable()->default(NULL);
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
