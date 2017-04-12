<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/system/admin', function() {
  return view('admin.dashboard');
});

Route::get('/birth/register', 'BirthCtrl@create');

Route::post('/birth/register', 'BirthCtrl@postCreate');

Route::get('/births/view', 'BirthCtrl@view');

Route::get('/births/edit/{id}', 'BirthCtrl@edit');

Route::put('/births/edit/{id}', 'BirthCtrl@update');

Route::get('/births/deregister', 'BirthCtrl@deregister');

Route::delete('/births/destroy/{id}', 'BirthCtrl@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
