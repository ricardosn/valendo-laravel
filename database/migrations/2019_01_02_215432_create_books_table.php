<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('title');
            $table->mediumText('subtitle');
            $table->char('isbn_10', 10)->nullable()->default(null);
            $table->char('isbn_13', 13);
            $table->tinyInteger('edition');
            $table->year('year');
            $table->integer('page_number');
            $table->longText('synopsis');
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
