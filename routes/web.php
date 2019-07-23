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

Route::view('/', 'welcome')->name('welcome');
Route::view('/dashboard', 'dashboard.system.dashboard')->name('dashboard');
Route::view('/icon', 'dashboard.system.icon')->name('icon');
Route::view('/map', 'dashboard.system.map')->name('map');
Route::view('/notifications', 'dashboard.system.notifications')->name('notifications');
Route::view('/profile', 'dashboard.system.profile')->name('profile');
Route::view('/table', 'dashboard.system.table')->name('table');
Route::view('/typography', 'dashboard.system.typography')->name('typography');
