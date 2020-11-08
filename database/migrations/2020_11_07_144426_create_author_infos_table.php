<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_infos', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained(); //secondary key
            $table->char('nationality', 150)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('bio', 2000)->nullable();
            $table->string('photo', 500)->default('https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png');
            $table->string('quote', 400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_infos');
    }
}
