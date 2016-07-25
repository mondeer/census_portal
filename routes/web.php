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

Route::get('/birth/register', 'BirthCtrl@create');

Route::post('/birth/register', 'BirthCtrl@postCreate');

Route::get('/births/view', 'BirthCtrl@view');

Route::get('/births/edit/{id}', 'BirthCtrl@edit');

Route::put('/births/edit/{id}', 'BirthCtrl@update');

Route::get('/births/deregister', 'BirthCtrl@deregister');

Route::delete('/births/destroy/{id}', 'BirthCtrl@destroy');
