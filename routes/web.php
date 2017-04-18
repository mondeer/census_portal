<?php

Route::get('/', function () {
    return view('welcome');
});

// auth routes
Route::get('/register', 'RegisterCtrl@register');

Route::post('/postregister', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

// end auth routes

Route::get('/system/admin', function() {
  return view('admin.dashboard');
});

Route::get('/child/register', 'BirthCtrl@create');

Route::post('/child/register', 'BirthCtrl@postCreate');

Route::get('/births/view', 'BirthCtrl@view');

Route::get('/births/edit/{id}', 'BirthCtrl@edit');

Route::put('/births/edit/{id}', 'BirthCtrl@update');

Route::get('/births/deregister', 'BirthCtrl@deregister');

Route::delete('/births/destroy/{id}', 'BirthCtrl@destroy');


Route::get('/adult/register', 'AdultCtrl@create');

Route::post('/adult/register', 'AdultCtrl@postCreate');

Route::get('/adult/view', 'AdultCtrl@view');

Route::get('/adult/edit/{id}', 'AdultCtrl@edit');

Route::put('/adult/edit/{id}', 'AdultCtrl@update');

Route::get('/adult/deregister', 'AdultCtrl@deregister');

Route::delete('/adult/destroy/{id}', 'AdultCtrl@destroy');

// report per constituency

Route::get('/filter/constituency', 'FilterCtrl@filter');

Route::post('/filter/constituency', 'FilterCtrl@constituency');

Route::get('/filter/location', 'FilterCtrl@filterlocation');

Route::post('/filter/location', 'FilterCtrl@location');

Route::get('/filter/ward', 'FilterCtrl@filterward');

Route::post('/filter/ward', 'FilterCtrl@ward');
