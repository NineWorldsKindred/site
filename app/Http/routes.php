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

Route::group(['middleware' => ['web']], function () {
    // Home page
    Route::get('/', 'AppBaseController@index');

    //Social Login
    Route::get('/login/{provider?}',[
        'uses' => 'Auth\AuthController@getSocialAuth',
        'as'   => 'auth.getSocialAuth'
    ]);


    Route::get('/login/callback/{provider?}',[
        'uses' => 'Auth\AuthController@getSocialAuthCallback',
        'as'   => 'auth.getSocialAuthCallback'
    ]);

    // Logout
    Route::get('/logout', 'Auth\AuthController@logout');

    // Calendar
    Route::get('/calendar', 'CalendarController@index');

    Route::group(['middleware' => ['auth']], function() {
        // TODO: Put member-only routes here

        Route::group(['middleware' => ['role:officer']], function() {
           // TODO: Put officer-only routes here
        });

        Route::group(['middleware' => ['role:member']], function() {
            // TODO: Put Kindred member-only routes here
            Route::get('/test', function(){
                return view('test');
            });
        });
    });
});