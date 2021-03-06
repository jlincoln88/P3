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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loremipsum', function () {
    return view('loremipsum.lorem');
});

Route::post('/loremipsum', 'LIController@postForm');

Route::get('/randomuser', function () {
    return view('randomuser.ruser');
});

Route::post('/randomuser', 'RUserController@postForm');

Route::get('/passwordgenerator', function () {
    return view('passwordgenerator.password');
});

Route::post('/passwordgenerator', 'PWGeneratorController@postForm');