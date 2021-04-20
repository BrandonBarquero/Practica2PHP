<?php
  // file: routes.php



Route::resource('/', 'LibroController@Index');


Route::resource('author/(:number)', 'authorController@show');

Route::resource('editorial/(:number)', 'editorialController@show');

Route::dispatch();
?>