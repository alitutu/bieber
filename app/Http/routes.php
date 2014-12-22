<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->bind('songs', function($slug)
{
	return \App\Song::whereSlug($slug)->first();
});

get('/', 'PagesController@index');
get('/home', 'HomeController@index');


$router->resource('songs', 'SongsController', [
	'names' => [
		'index' => 'songs_path',
		'show'  => 'song_path',
		'create'  => 'add_song',
		'edit'  => 'edit_song',
		'update'  => 'update_song',
		'destroy'  => 'delete_song',
		'store'  => 'save_song',
	],
	'only'	=> [
		'index', 'show','create','edit','update','destroy','store'
	]
]);


/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
