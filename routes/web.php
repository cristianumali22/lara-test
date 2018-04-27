<?php

Route::get('/test', function () {
    //return view('welcome');
    echo "hello";
});
 //Route::resource('itemCRUD','ItemCRUDController');


Route::get('/', 'PostController@index');
//Route::get('/post/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::get('/try', 'TryController@index');
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');




Route::group([ 'prefix' => '/new', 'middleware' => ['web']], function(){
    Route::get('/', 'BooksController@index')->name('books.index');
    Route::get('/showed/{id}', 'BooksController@showed')->name('books.showed');
    Route::get('/delete/{id}', 'BooksController@delete')->name('books.delete');
    Route::get('/edit/{id}', 'BooksController@edit')->name('books.edit');
    Route::post('/update/{id}', 'BooksController@update')->name('books.update');
    Route::get('/add', 'BooksController@add')->name('books.add');
    Route::post('/addform', 'BooksController@store')->name('books.store');
    Route::post('/search', 'BooksController@search')->name('books.search');
    Route::get('/sortingOfTitle', 'BooksController@sortingOfTitle')->name('books.sortingOfTitle');
    Route::get('/sortingOfISBN', 'BooksController@sortingOfISBN')->name('books.sortingOfISBN');
    Route::get('/sortingOfAuthor', 'BooksController@sortingOfAuthor')->name('books.sortingOfAuthor');
    Route::get('/sortingOfPublisher', 'BooksController@sortingOfPublisher')->name('books.sortingOfPublisher');
    Route::get('/sortingOfYearPublished', 'BooksController@sortingOfYearPublished')->name('books.sortingOfYearPublished');
    Route::get('/sortingOfCategory', 'BooksController@sortingOfCategory')->name('books.sortingOfCategory');
 });

