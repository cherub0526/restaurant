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

Route::get('thumb/{filename}', function($filename)
{
	$img = Image::make('restaurant/'. $filename)->resize(1600, 800)->crop(200, 200, 80, 15)->gamma(1.8)->contrast(35);
	return $img->response('jpg');
});

Route::get('images/{filename}', function($filename)
{
	$img = Image::cache(function($image) use($filename) {
		$image->make('restaurant/' . $filename)->resize(1600,615);
	}, 1440, true);
	return $img->response('jpg');
});

Route::get('/', 'RestaurantController@index');
Route::get('about','RestaurantController@about');
Route::get('menu','RestaurantController@menu');
Route::get('portfolio','RestaurantController@portfolio');
Route::get('news','RestaurantController@news');
Route::get('contact','RestaurantController@contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
