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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@showIndex');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('home', 'UtilisateurController@index');
// Route::get('inscription', 'UtilisateurController@inscription');
// Route::get('connexion', 'UtilisateurController@connexion');
Route::get('monpanier', 'PanierController@monpanier');
Route::get('voirmonpanier', 'PanierController@voirmonpanier');
// Route::get('annonce', 'AnnonceController@index');
// Route::get('annonce/add', 'AnnonceController@create');
Route::resource('utilisateur', 'UtilisateurController');
Route::resource('annonce', 'AnnonceController');
Route::resource('message', 'MessageController');
Route::resource('commentaire', 'CommentaireController');
// Route::resource('panier', 'PanierController@monpanier');

Route::get('search', 'AnnonceController@search');
Route::get('sort', 'AnnonceController@sort');
Route::get('unsort', 'AnnonceController@unsort');
Route::get('choose', 'AnnonceController@choose');
Route::get('maxprice', 'AnnonceController@maxprice');
Route::get('minprice', 'AnnonceController@minprice');

// Route::get('upcommentaire/{id}', 'CommentaireController@stor');

// Route::get('list', 'AnnonceController@myannonce');
