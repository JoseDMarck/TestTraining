<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



 

Route::prefix('admin/users/')->group(function () {
 
 
    //Route::get('users', function () { }); 
    //Route::get('users','UserController@index');
    //Route::view('create','admin.users.create');
    Route::get('show','userController@show');
    Route::get('create','userController@create');
    Route::post('store','userController@store');
    Route::get('/','userController@index');
    Route::get('/{id}/destroy','userController@destroy')->name('users.destroy');;
    Route::get('/{user}/edit','userController@edit')->name('users.edit');;
    Route::put('/{user}','userController@update')->name('users.update');;
    

});


Route::prefix('admin/categories/')->group(function () {
    Route::get('/','categoriesController@index');
    Route::get('create','categoriesController@create');
    Route::post('store','categoriesController@store');
    Route::get('/{id}/destroy','categoriesController@destroy')->name('categories.destroy');;
    Route::get('/{category}/edit','categoriesController@edit')->name('categories.edit');;
    Route::put('/{category}','categoriesController@update')->name('categories.update');;

    
    
});
