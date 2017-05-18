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

Route::get('/clerk/dashboard', function() {
  return view('clerk.dashboard');
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

// reporting

Route::get('/filter/constituency', 'FilterCtrl@filter');

Route::post('/filter/constituency', 'FilterCtrl@constituency');

Route::get('/filter/location', 'FilterCtrl@filterlocation');

Route::post('/filter/location', 'FilterCtrl@location');

Route::get('/filter/ward', 'FilterCtrl@filterward');

Route::post('/filter/ward', 'FilterCtrl@ward');

Route::get('/filter/gender', 'FilterCtrl@filtergender');

Route::post('/filter/gender', 'FilterCtrl@gender');

Route::post('/filter/birthcert', 'FilterCtrl@cert');

Route::get('/birthcert',array('as'=>'/birthcert','uses'=>'FilterCtrl@birthcert'));


// Clerk routes

Route::get('/clerk/child/register', 'ClerkCtrl@create');

Route::post('/clerk/child/register', 'ClerkCtrl@postCreate');

Route::get('/clerk/births/view', 'ClerkCtrl@view');

Route::get('/clerk/births/edit/{id}', 'ClerkCtrl@edit');

Route::put('/clerk/births/edit/{id}', 'ClerkCtrl@update');


Route::get('/clerk/adult/register', 'ClerkCtrl@createadult');

Route::post('/clerk/adult/register', 'ClerkCtrl@postCreateadult');

Route::get('/clerk/adult/view', 'ClerkCtrl@viewadult');

Route::get('/clerk/adult/edit/{id}', 'ClerkCtrl@editadult');

Route::put('/clerk/adult/edit/{id}', 'ClerkCtrl@updateadult');
