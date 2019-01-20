<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('known_as');
            $table->enum('gender', ['masculino', 'feminino', 'não binário', 'queer']);
            $table->text('birthday');
            $table->text('death');
            $table->text('country');
            $table->text('state');
            $table->text('city');
            $table->text('biography');
            $table->text('site');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('wikipedia');
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
        Schema::dropIfExists('authors');
    }
}
