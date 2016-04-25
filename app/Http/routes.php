<?php


//c'est ici que nous allons realiser les route nécessaire au bon chargement et lancement des pages
Route::group(['middleware' => ['web']], function () {

	//page de garde
	Route::get('/', [
		'uses' => 'HomeController@index', 
		'as' => 'home'
	]);
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');


	// Administrateur
	Route::get('admin', [
		'uses' => 'AdminController@admin',
		'as' => 'admin',
		'middleware' => 'admin'
	]);

	Route::get('medias', [
		'uses' => 'AdminController@filemanager',
		'as' => 'medias',
		'middleware' => 'redac'
	]);


	// actualité mise a jour/blog
	Route::get('blog/order', ['uses' => 'BlogController@indexOrder', 'as' => 'blog.order']);
	Route::get('articles', 'BlogController@indexFront');
	Route::get('blog/tag', 'BlogController@tag');
	Route::get('blog/search', 'BlogController@search');

	Route::put('postseen/{id}', 'BlogController@updateSeen');
	Route::put('postactive/{id}', 'BlogController@updateActive');

	Route::resource('blog', 'BlogController');

	// Commentaires
	Route::resource('comment', 'CommentController', [
		'except' => ['create', 'show']
	]);

	Route::put('commentseen/{id}', 'CommentController@updateSeen');
	Route::put('uservalid/{id}', 'CommentController@valid');


	// Mise en contact
	Route::resource('contact', 'ContactController', [
		'except' => ['show', 'edit']
	]);


	// Utilisateur lambda
	Route::get('user/sort/{role}', 'UserController@indexSort');

	Route::get('user/roles', 'UserController@getRoles');
	Route::post('user/roles', 'UserController@postRoles');

	Route::put('userseen/{user}', 'UserController@updateSeen');

	Route::resource('user', 'UserController');

	// Permet l'authentification des utlisateurs
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

	
	Route::get('auth/resend', 'Auth\AuthController@getResend');


	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');


	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');


	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

});