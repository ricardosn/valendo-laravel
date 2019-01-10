<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_author', function (Blueprint $table) {
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('book_id');

            $table->unique(['author_id', 'book_id']);
            $table->foreign('author_id')->references('id')->on('authors')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_author', function (Blueprint $table) {
            $table->dropUnique('book_author_author_id_book_id_unique');
            $table->dropForeign('book_author_author_id_foreign');
            $table->dropForeign('book_author_book_id_foreign');
        });

        Schema::dropIfExists('book_author');
    }
}
