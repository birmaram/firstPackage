<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//
// ?
Route::get('/loginfirst', function () {
    return 'hello I am birmaram';
});

Route::get('/admin1', function () {
     return view('page.sign_up');
 });

 Route::post('/login',['uses'=>'bookAddController@add_book','as'=>'book.add_submit']);
 Route::get('booklist',['uses'=>'bookAddController@list_books','as'=>'book.list']);
 Route::get('del/{id}',['uses'=>'bookAddController@delete_book','as'=>'book.del']);
 Route::get('edit/{id}',['uses' =>'bookAddController@edit', 'as' => 'book.edit']);
 Route::post('update/{id}',['uses'=>'bookAddController@update','as'=>'book.update']);
 Route::get('Sort',['uses'=>'bookAddController@sorting','as'=>'book.sorting']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['web']], function () {
    //
//});
