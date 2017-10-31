<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
          $table->increments('id_book');
          $table->string('book');
          $table->string('title');
          $table->string('author');
          $table->string('edition_year');
      });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
