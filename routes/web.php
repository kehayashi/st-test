<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::post('/', 'ArquivoController@readXML');

Route::post('/arquivo', 'ArquivoController@lerArquivo');
