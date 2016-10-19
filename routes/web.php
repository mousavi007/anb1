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
        'uses'=>'Group_Kala@manage',
        'as'=>'groupkala',
    ])->middleware('auth');
    
    Route::post('updategroup',[
        'uses'=>'Group_Kala@updategroup',
        'as'=>'updategroup'
    ])->middleware('auth');

    Route::post('addgroup',[
        'uses'=>'Group_Kala@addgroup',
        'as'=>'addgroup'
    ])->middleware('auth');

    Route::post('delgroup',[
        'uses'=>'Group_kala@delgroup',
        'as'=>'delgroup'
    ])->middleware('auth');

    Route::get('/fard', [
        'uses'=>'Fard@manage',
        'as'=>'fard',
    ])->middleware('auth');
});