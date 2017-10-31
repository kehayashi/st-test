<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ArquivoController@readXML');

Route::get('/arquivo', 'ArquivoController@lerArquivo');
