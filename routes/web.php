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

Route::group(['middlewareGroups' => 'web'], function () {

    // For AuthController
    Route::group(['middleware' => 'unauthenticated'], function() {

    	Route::get('/login', 'Auth\LoginController@login_page');
    	Route::get('/', 'HomeController@index');
    	Route::get('register', 'Auth\RegisterController@index');
    	Route::post('registerUser', 'Auth\RegisterController@create');
    	Route::post('authenticateUsers' , 'Auth\LoginController@authenticateUsers');
    	Route::get('reset' , 'Auth\ResetPasswordController@reset');

		        
    });

    Route::get('logout', 'Auth\LoginController@logout');

    // Auth User
    Route::group(['middleware' => 'authenticated'], function() {

    	// Dashboard
    	Route::get('dashboard', 'HomeController@dashboard');

    	// POSTS
        Route::get('front_page', 'HomeController@index');
        Route::get('list_posts', 'PostController@list_post');
        Route::get('add_post', 'PostController@add_post_page');
        Route::post('submit_post', 'PostController@submit_post');
        Route::post('submit_bid', 'BidController@submit_bid');
        Route::get('list_bid','BidController@list_bids');
        Route::get('single_post/{id}','PostController@single_post');
        Route::get('posted_products','PostController@posted_products');
        Route::get('update_post_page/{id}','PostController@update_post_page');
        Route::post('update_post','PostController@update_post');
        Route::get('bids','BidController@list_bids');
        Route::get('offers/{id}','BidController@offers');
        Route::get('edit_bid/{bid_id}','BidController@edit_bid');
        Route::get('bid_update','BidController@bid_update');
        Route::get('accept_bid/{id}','BidController@accept_bid');
        Route::post('payment','PaymentController@payment');
        Route::get('payment_page','PaymentController@payment_page');


    });


});
