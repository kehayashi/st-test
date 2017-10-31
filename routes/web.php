<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ArquivoController@readXML');

Route::post('/arquivo', 'ArquivoController@lerArquivo');
