<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $table = 'books';

	protected $primaryKey = 'id_book';

	public $timestamps = false;

	protected $fillable = array(
        'book',
        'title',
        'author',
        'edition_year',
  );

}
