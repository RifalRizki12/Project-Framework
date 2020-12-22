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
//     return view('home');
// });

Route::get('/', 'SiteController@home');

Route::get('/register','AuthController@register');
Route::post('/postregister','AuthController@postregister');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:admin']], function () {
    
    Route::get('/dashboard','DashboardController@index');
    Route::get('/pembeli','PembeliController@index');
    Route::post('/pembeli/create','PembeliController@create');
    Route::get('/pembeli/{id}/edit','PembeliController@edit');
    Route::post('/pembeli/{id}/update','PembeliController@update');
    Route::get('/pembeli/{id}/delete','PembeliController@delete');
    
    Route::get('/control','ControlController@index');
    Route::post('/control/create','ControlController@create');
    Route::get('/control/{id}/delete','ControlController@delete');
    Route::get('/control/{id}/edit','ControlController@edit');
    Route::post('/control/{id}/update','ControlController@update');

    Route::group(['prefix' => 'postsBarang'], function() {
        Route::get('/', 'PostBarangController@index');
        Route::post('/create', 'PostBarangController@create');
        Route::get('/{id}/delete','PostBarangController@delete');
        Route::get('/{id}/edit','PostBarangController@edit');
        Route::post('/{id}/update','PostBarangController@update');
    });

    Route::get('/profile','ControlController@profile');
    

    // Route::get('/postsBarang','PostBarangController@index');
    // Route::post('/postsBarang/create','PostBarangController@create');
    // Route::get('/postsBarang/{id}/delete','PostBarangController@delete');
    // Route::get('/postsBarang/{id}/edit','PostBarangController@edit');
    // Route::post('/postsBarang/{id}/update','PostBarangController@update');
});

// Route::group(['prefix' => 'ecomerce'], function() {
//     Route::get('/', 'EcommerceController@index')->name('ecomerce.index');
// });

Route::group(['middleware' => ['auth','checkRole:admin,pembeli']], function () {
    Route::get('/check','DashboardController@check');
    
});

Route::group(['middleware' => ['auth','checkRole:pembeli']], function () {
    Route::get('/ecomerce','EcommerceController@index');

    Route::get('/shop','ShopController@index');
    Route::get('/detail/{id}','ShopController@detail');
    Route::post('/detail/{id}','ShopController@pesan');
    Route::get('check-out','ShopController@check_out');
});



