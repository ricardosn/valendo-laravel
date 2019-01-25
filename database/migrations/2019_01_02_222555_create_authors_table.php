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
            $table->string('name');
            $table->string('known_as');
            $table->enum('gender', ['masculino', 'feminino', 'não binário', 'queer']);
            $table->date('birthday');
            $table->date('death');
            $table->string('country');
            $table->char('state', 2);
            $table->string('city');
            $table->longText('biography');
            $table->string('site');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('wikipedia');
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
