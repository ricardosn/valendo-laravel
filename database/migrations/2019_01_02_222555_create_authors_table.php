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
            $table->string('known_as')->nullable()->default(null);
            $table->enum('gender', ['masculino', 'feminino', 'não binário', 'queer']);
            $table->date('birthday')->nullable()->default(null);
            $table->date('death')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->char('state', 2)->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->longText('biography')->nullable()->default(null);
            $table->string('site')->nullable()->default(null);
            $table->string('facebook')->nullable()->default(null);
            $table->string('twitter')->nullable()->default(null);
            $table->string('wikipedia')->nullable()->default(null);
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
