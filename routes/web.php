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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
    return View::make('pages.home');
});

// Route::get('/about', function(){
//     return View::make('pages.contact');
// });

//Route Login
Route::get('/login', function(){
    return View::make('pages.login');
});

Route::post('/login', 'LoginController@postlogin')->name('login');
//End

//Route subscription-management-list
Route::get('/subscription-management-list', function(){
    return View::make('pages.subscription-management-list');
});


Route::post('/subscription-management-list', 'smlController@search')->name('sml');


//end

//Route subscription-management-detail
Route::get('/subscription-management-detail', function(){
    return View::make('pages.subscription-management-detail');
});

//end

Route::get('/member-register', function(){
    return View::make('pages.member-register');
});

Route::get('/member-approval', function(){
    return View::make('pages.member-approval');
});

Route::get('/members', function(){
    return View::make('pages.member-lists');
});

Route::get('/transaction-saving', function(){
    return View::make('pages.transaction-saving');
});

Route::get('/transaction-loan', function(){
    return View::make('pages.transaction-loan');
});

