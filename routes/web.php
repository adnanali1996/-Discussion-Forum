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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum', 'ForumController@index')->name('home');

// SOCIAL AUTHENTICATION
Route::get('{provider}/auth', 'SocialController@auth')->name('social.auth');

// FOR CALLBACK
Route::get('{provider}/redirect', 'SocialController@auth_callback')->name('auth.callback');

// SHOW THE DISSCUSSIONS OF PARTICULAR CHANNEL
Route::get('channel/{slug}', 'ForumController@channel_forum')->name('channel_forum');

// GENERATING THE SEVEN ROUTES WITH RESOURCE METHOD

Route::group(['middleware' => 'auth'], function () {

    Route::resource('channel', 'ChannelController');
    Route::get('/discussion/create', 'DiscussionController@create')->name('discussion.create');
    Route::post('/discussion/store', 'DiscussionController@store')->name('discussion.store');
    Route::get('/discussion/{slug}', 'DiscussionController@show')->name('discussion');
    Route::post('/discussion/reply/{id}', 'DiscussionController@reply')->name('discussion.reply');
    // FOR LIKING THE POST
    Route::get('reply/like/{id}', 'RepliesController@like')->name('reply.like');

    // FOR DISLIKING THE POST
    Route::get('reply/dislike/{id}', 'RepliesController@dislike')->name('reply.dislike');

});
