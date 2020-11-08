<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            //primary key
            $table->id();
            //secondary keys
            $table->foreignId('genre_id')->constrained();
            //other columns
            $table->char('title');
            $table->char('edition', 150)->nullable();
            $table->char('isbn', 17)->unique();
            $table->smallInteger('pages')->nullable();
            $table->year('year')->nullable();
            $table->string('cover')->default('https://i.pinimg.com/474x/74/1a/7d/741a7d6860c1870584227044c151db39.jpg');
            $table->tinyInteger('vote')->nullable();
            $table->string('quote', 300)->nullable();
            $table->string('note', 2000)->nullable();
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
        Schema::dropIfExists('books');
    }
}
