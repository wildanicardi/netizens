<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {
    Route::resource('tweets', 'TweetController');
    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');
    Route::get('/explore', 'ExploreController');

    Route::post('/tweets/{tweet}/like', 'LikeController@store');
    Route::delete('/tweets/{tweet}/like', 'LikeController@destroy');
});
Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
