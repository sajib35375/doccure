<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::resource('users','App\Http\Controllers\UsersControllers');
Route::resource('role','App\Http\Controllers\RoleController');
Route::get('allrole','App\Http\Controllers\RoleController@roles')->name('role.show');
Route::get('status/{id}','App\Http\Controllers\RoleController@statusmethod')->name('status.show');
//Route::get('status_d/{id}','App\Http\Controllers\RoleController@status_method')->name('status.d');
