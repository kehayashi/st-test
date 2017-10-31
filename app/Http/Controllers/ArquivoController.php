<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Book;
use App\Http\Requests\ArquivoRequest;
use Excel;

Class ArquivoController extends Controller {

  public function lerArquivo(ArquivoRequest $request){

    \Excel::load($request->arquivo, function($reader) {

        // Getting all results
        $results = $reader->get();

        foreach ($results as $key => $var) {
            if($var->book != null){

              $book = new Book();
              $book->book = $var->book;
              $book->title = $var->title;
              $book->author = $var->author;
              $book->edition_year = $var->edition_year;

              try {
                $book->save();
              }
              catch (Exception $e) {
                echo 'false';
              }

            }
            else{
              break;
            }

        }

    });

    $query = "SELECT * FROM `books` ORDER BY ";
    $cont = 0;

    if($request->edition_year != 'null'){
      if($cont == 0){
        $queryEditionYear = 'edition_year '.$request->edition_year;
        $query = $query.$queryEditionYear;
        $cont++;
      }
      else{
        $queryEditionYear = ', edition_year '.$request->edition_year;
        $query = $query.$queryEditionYear;
        $cont++;
      }
    }

    if($request->author != 'null'){
      if($cont == 0){
        $queryAuthor = 'author '.$request->author;
        $query = $query.$queryAuthor;
        $cont++;
      }
      else{
        $queryAuthor = ', author '.$request->author;
        $query = $query.$queryAuthor;
        $cont++;
      }
    }

    if($request->title != 'null'){
      if($cont == 0){
        $queryTitle = 'title '.$request->title;
        $query = $query.$queryTitle;
        $cont++;
      }
      else{
        $queryTitle = ', title '.$request->title;
        $query = $query.$queryTitle;
        $cont++;
      }
    }

    $books = DB::select($query);

    DB::table('books')->delete();

    return view('list')
        ->with('books', $books);

  }//end function


  public function readXML(){

    $xml = simplexml_load_file('attributes_config.xml');

    return view('welcome');
      ->with('attribute1', $xml->attribute1)
      ->with('attribute2', $xml->attribute2)
      ->with('attribute3', $xml->attribute3);

  }//readXML

}
