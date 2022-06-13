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

Route::get('/dosen', 'DosenController@dosen');

Route::get('/dosen/cari', 'DosenController@pencarian');

//Route::get('/dosen/deletedosen/{id}', 'DosenController@deletedosen');

//Route::get('/user', 'AuthController@user');

//Route::get('/user/formuliruser', 'AuthController@formuliruser');

//Route::post('/user/simpanuser', 'AuthController@simpanuser');

//Route::get('/login', 'AuthController@login');

//Route::post('/login/ceklogin', 'AuthController@ceklogin');

Route::get('/user', 'AuthController@user');

Route::get('/user/formuliruser', 'AuthController@formuliruser');

Route::post('/user/simpanuser', 'AuthController@simpanuser');

Route::get('/user/edituser/{id}', 'AuthController@edituser');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');