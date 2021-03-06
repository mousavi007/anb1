<?php
use Illuminate\Support\Facades\DB;
use Opilo\Farsi\JalaliDate;
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
        'uses'=>'Fard_controller@manage',
        'as'=>'fard',
    ])->middleware('auth');

    Route::post('addfard',[
        'uses'=>'Fard_controller@addfard',
        'as'=>'addfard'
    ])->middleware('auth');

    Route::post('updatefard',[
        'uses'=>'Fard_controller@updatefard',
        'as'=>'updatefard'
    ])->middleware('auth');

    Route::post('delfard',[
        'uses'=>'Fard_controller@delfard',
        'as'=>'delfard'
    ])->middleware('auth');

    Route::get('/room', [
        'uses'=>'Room_Controller@manage',
        'as'=>'room',
    ])->middleware('auth');

    Route::post('updateroom',[
        'uses'=>'Room_Controller@updateroom',
        'as'=>'updateroom'
    ])->middleware('auth');
    

    Route::post('addroom',[
        'uses'=>'Room_Controller@addroom',
        'as'=>'addroom'
    ])->middleware('auth');

    Route::post('delroom',[
        'uses'=>'Room_Controller@delroom',
        'as'=>'delroom'
    ])->middleware('auth');

    Route::get('/kala', [
        'uses'=>'Kala_Controller@manage',
        'as'=>'kala',
    ])->middleware('auth');

    Route::post('addkala',[
        'uses'=>'Kala_Controller@addkala',
        'as'=>'addkala'
    ])->middleware('auth');


      Route::post('kalalist',[
            'uses'=>'Kala_Controller@search_kala',
            'as'=>'kalalist'
        ])->middleware('auth');


        Route::post('updatekala',[
            'uses'=>'Kala_Controller@updatekala',
            'as'=>'updatekala'
        ])->middleware('auth');
        
});