<?php
use Illuminate\Support\Facades\DB;

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
Route::group(['middleware' => 'web'],function (){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/home', [
        'uses'=>'UserController@gethome',
        'as'=>'home',
    ])->middleware('auth');

    Route::post('signin',[
        'uses'=>'UserController@signin',
        'as'=>'signin'
    ]);

Route::post('signup',[
    'uses'=>'UserController@signup',
    'as'=>'signup'
]);

    Route::get('signout',[
        'uses'=>'UserController@signout',
        'as'=>'signout'
    ]);
    Route::get('/groupkala', [
        'uses'=>'GroupKala@manage',
        'as'=>'garoupkala',
    ])->middleware('auth');
});