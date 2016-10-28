<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



// Route::get('/', function () {
//     return view('guest/home');
// });

Route::get('/admin','SecteurController@index');

Route::get('/','HomeController@index');

// Route::get('/{lang}','AccueilController@index')->name('accueil.index');

// ========================= ADMIN ROUTES ========================= //

// Dashboard Controller Route

Route::get('dashboard','DashboardController@index')->name('dashboard.index');

// Langues Controller Route

Route::resource('langues', 'LangueController');

// Publication Controller Route

Route::resource('posts', 'PostController');

// Secteur Controller Route

Route::resource('secteurs', 'SecteurController');

// Strucutre Controller Route

Route::get('{id}/create-structure','StructureController@createstructure')->name('structures.createstructure');

Route::resource('structures', 'StructureController');

// Filière Controller Route

Route::resource('filieres', 'FiliereController');

// Projet Filière Controller Route

Route::resource('projets', 'ProjetController');

// Document Controller Route

Route::resource('documents', 'DocumentController');

// Mediathèque Controller Route

Route::resource('medias', 'MediaController');

// Utilisateur Controller Route

Route::resource('users', 'UserController');

// Menu Controller Route

Route::resource('menus', 'MenuController');

// Type Controller Route

Route::resource('types', 'TypeController');

// Logs Controller Route

Route::get('logs','LogController@index')->name('logs.index');

// ========================= GUEST ROUTES ========================= //



Route::get('/home2', function () {
	$active = 'home';
    return view('index',['active'=>$active]);
});

Route::get('/accueil', function () {
	$active = 'home';
    return view('guest/home',['active'=>$active]);
});

Route::get('/guinee', function () {
	$active = 'guinee';
    return view('guest/guinee',['active'=>$active]);
});

Route::get('/temoignages', function () {
	$active = 'affaires';
    return view('guest/temoignages',['active'=>$active]);
});

Route::get('/agriculture', function () {
	$active = 'opportunites';
    return view('guest/agriculture',['active'=>$active]);
});

Route::get('/actualites', function () {
	$active = 'presse';
    return view('guest/actualites',['active'=>$active]);
});

Route::get('/mediatheque', function () {
	$active = 'events';
    return view('guest/media',['active'=>$active]);
});

Route::get('/agenda', function () {
	$active = 'events';
    return view('guest/agenda',['active'=>$active]);
});

Route::get('/contact', function () {
	$active = 'contact';
    return view('guest/contact',['active'=>$active]);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
