<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_gender', function (Blueprint $table) {
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('gender_id');

            $table->unique(['author_id', 'gender_id']);
            $table->foreign('author_id')->references('id')->on('authors')
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
        Schema::table('author_gender', function (Blueprint $table) {
            $table->dropUnique('author_gender_author_id_gender_id_unique');
            $table->dropForeign('author_gender_author_id_foreign');
            $table->dropForeign('author_gender_gender_id_foreign');
        });

        Schema::dropIfExists('author_gender');
    }
}
