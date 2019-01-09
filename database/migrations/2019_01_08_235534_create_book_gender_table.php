<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_gender', function (Blueprint $table) {
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('gender_id');

            $table->unique(['book_id', 'gender_id']);
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')
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
        Schema::table('book_gender', function (Blueprint $table) {
            $table->dropUnique('book_gender_book_id_gender_id_unique');
            $table->dropForeign('book_gender_book_id_foreign');
            $table->dropForeign('book_gender_gender_id_foreign');
        });

        Schema::dropIfExists('book_gender');
    }
}
