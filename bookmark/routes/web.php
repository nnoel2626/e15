<?php

/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');


# Misc. Pages
Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/support', 'PageController@support');



# Books
Route::get('/books/edit', 'BookController@edit');
Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');
Route::get('/books', 'BookController@index');
Route::get('/books/{slug?}', 'BookController@show');
Route::get('/search', 'BookController@search');
Route::get('/list', 'BookController@list');

# This was an example route to show multiple parameters;
# Not a feature we're actually building, so I'm commenting out
# Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');
