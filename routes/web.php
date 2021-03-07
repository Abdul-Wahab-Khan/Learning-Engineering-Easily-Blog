<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/aboutDeveloper', 'HomeController@aboutDeveloper')->name('aboutDeveloper');
Route::get('/category/{category}', 'HomeController@categorize')->name('categorize');
Route::post('/searchPosts', 'HomeController@searchPosts')->name('searchPosts');


Route::get('posts', 'PostController@index')->name('posts');
Route::get('/posts/feed', 'PostFeedController@index')->name('posts.feed');
Route::get('posts/edit', "PostController@edit")->name("posts.edit");
Route::resource('posts', 'PostController')->only('show');
Route::resource('users', 'UserController')->only('show');



Route::get('newsletter-subscriptions/unsubscribe', 'NewsletterSubscriptionController@unsubscribe')->name('newsletter-subscriptions.unsubscribe');
Route::get('newsletter-subscriptions/subscribe', 'NewsletterSubscriptionController@subscribe')->name('newsletter-subscriptions.subscribe');
