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

use PublicNews\Articles;

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
Route::get('/test', function()
{
	dd(Config::get('mail'));
});

// Route to list the rss feed
Route::get('/rss', 'RssFeedController@rss');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    //Router for the Latest Page 
    Route::get('/', function () {
    
    	$articles = Articles::where('active','=',1)->orderBy('updated_at', 'DESC')->take(10)->get();
    	return view('welcome', ['articles'=>$articles]);
    });
    
    //Router to register the user
    Route::post('/register', 'Auth\\RegistrationController@store');
    
    //Router to confirm the user email
    Route::get('/register/verify/{confirmationCode}', [
    		'as' => 'confirmation_path',
    		'uses' => 'Auth\\RegistrationController@confirm'
    		]);
    
    //Router to set the password
    Route::get('/password/first/{confirmationCode}', [
    		'as' => 'confirmation_path',
    		'uses' => 'Auth\\PasswordController@first'
    		]);
    
    //Router to save the first password
    Route::post('/password/first/', 'Auth\\PasswordController@store');
    
    //Router for the Home User Page
    Route::get('/home', 'HomeController@index');
    
    //Router Article
    Route::group(['prefix'=>'article'], function() {
    	
    	//Router to create a new article
    	Route::get('/create', 'ArticleController@create');
    	
    	//Router to save a new article
    	Route::post('/create', 'ArticleController@store');
    	
    	//Router to create a pdf file with the article content
    	Route::get('/{slug}/pdf','ArticleController@pdf');
    	
    	//Router to delete an article
    	Route::get('/{id}/destroy','ArticleController@destroy');
    	
    	//Router to update an article
    	Route::get('/{id}/update','ArticleController@update');
    	
    	//Router to show an article
    	Route::get('/{slug}','ArticleController@index');
    	
    });
    
});
